<?php

namespace App\Http\Controllers;

use App\Mail\OtpSent;
use App\Mail\PetTransfer;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public $user;

    //Send Login OTP Email
    public function verificationEmail($userEmail, Client $user)
    {
        try
        {
            // Mail::to($userEmail)->send(new SendVerificationEmail($user));
            //Mail::to($userEmail)->send(new EmailOtp($user));
            Mail::to($userEmail)->send(new OtpSent($user));

            $message = "Success! Your OTP Code has been sent";
        }
        catch(\Exception $e)
        {
            $message = "Error: ".$e->getMessage();
        }

        return $message;
    }

    //send transfer email notification
    public function petTransferEmailNotification($userEmail, Client $user)
    {
        try {
            Mail::to($userEmail)->send(new PetTransfer($user));

            $message = TRUE; //"Transfer email notification delivered";
        } catch (\Exception $e) {
            $message = FALSE; //"Error sending notification. Please try again";
        }

        return $message;
    }
}
