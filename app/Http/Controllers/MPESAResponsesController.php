<?php

namespace App\Http\Controllers\API\wallet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use AfricasTalking\SDK\AfricasTalking;

class MPESAResponsesController extends Controller{

    public function stk_push_response(Request $request)
    {
        $code = 0;
        $responseArr = [];
        try {
            Log::info('STK Push endpoint hit: ');
            Log::info($request->all());
            // return [
            //     'ResultCode' => 0,
            //     'ResultDesc' => 'Accept Service',
            //     'ThirdPartyTransID' => rand(300, 9999)
            // ];

            header("Content-Type: application/json");

            $response = '{
                "ResultCode": 0,
                "ResultDesc": "Confirmation Received Successfully"
            }';

            $body ='Body';

            // DATA
            $mpesaResponse = file_get_contents('php://input');

            // log the response
            $time_now = Carbon::now();
            $logFile = $time_now."_MPESAConfirmationResponse.json";

            // write to file
            $log = fopen($logFile, "a");

            fwrite($log, $mpesaResponse);
            fclose($log);

            //Processing the Mpesa json response Data
            $mpesaResponse = file_get_contents($time_now.'_MPESAConfirmationResponse.json');
            $callbackContent = json_decode($mpesaResponse);

            $Resultcode = $callbackContent->Body->stkCallback->ResultCode;

            $paymentObj = [];
            if ($Resultcode == 0) {
                $CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
                $Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
                $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
                $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[3]->Value;

                //TODO: Use the new wallet logic to get the account_no of the user who transacted
                $txn_details = Payment::query()
                ->where('checkout_request_id', '=', $CheckoutRequestID)
                ->first();

                // log the response
                $time2_now = Carbon::now();
                $logFile2 = $time2_now."_PaymentDetails.json";

                // write to file
                $log2 = fopen($logFile2, "a");
                $payDtls =json_encode($txn_details);
                fwrite($log2, $payDtls);
                fclose($log2);

                //Get the user id of the user who transacted
                $payer_ac_number = $txn_details->payer_ac_number;
                Log::info('STK Push endpoint hit callback content: ');
                Log::info($payer_ac_number);

                //Now update the user's wallet with the amount transacted
                $user = User::query()
                ->where('ac_number', '=', $payer_ac_number)
                ->first();
                $user->deposit($Amount);
                //Transfer this amount from SuperAdminAccount
                $super_admin = User::query()
                ->where('id', '=', 1)
                ->first();

                //$super_admin->forceTransfer($user, $Amount);
                $super_admin->withdraw($Amount);

                //Send an email/sms to the user with invoice details and pdf attachment
                // //Init AT API movefaretech
                // $username = 'movefaretech';
                // $api_key = '84496b4fb16e36e0b79863e1d7196df8a03d27339289cd5586efb5140f93c243';
                // $at_api = new AfricasTalking($username, $api_key);

                // //Get the SMS service
                // $sms = $at_api->sms();

                // //Use the service
                // $sms_msg = $txn_details->transaction_ref.' confirmed. KSh '. $txn_details->amount . 'lipa fare paid to Tap & Go Kenya on '. $txn_details->transaction_date;
                // $sms_sender = $sms->send([
                //     'to' => $txn_details->phone_number,
                //     'message' => $sms_msg
                // ]);
                // Log::info('STK Push endpoint hit callback SMS Sender: ');
                // Log::info($sms_sender);

                //set the payment object
                $paymentObj = [
                    'mpesa_receipt_number' => $MpesaReceiptNumber,
                    'status' => 'completed',
                ];

                $code = 200;
                $responseArr = [
                    "ResultCode" => 0,
                    "ResultDesc" => "Confirmation Received Successfully"
                ];

                //At this point, reward this user with loyalty points
            }
            else{
                $paymentObj = [
                    'status' => 'cancelled'
                ];

                $code = 203;
                $responseArr = [
                    "ResultCode" => 1,
                    "ResultDesc" => "Invalid request"
                ];
            }

            Payment::where('checkout_request_id', $CheckoutRequestID)
            ->update($paymentObj);
        }
        catch (Exception $e) {
            $err_code = $e->getCode();
            $err_msg = $e->getMessage();

            $code = 500;
            $responseArr = [
                "ResultCode" => 1,
                "Error" => [
                    "code" => $err_code,
                    "message" => $err_msg
                ]
            ];
        }

        return response($responseArr, $code);
    }
}