<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    /**
     * Show the form to create a new client.
     *
     * @return \Illuminate\View\View
     */
    public function subscribe_client()
    {
        if(Auth::guard('client')->check()){
            return redirect('client-dashboard');
        }

        $data = [
            'saas_name' => 'FindUsChipUs',
            'title' => 'Finduschipus - Pet microchip database',
            'description' => 'Get started today'
        ];

        return view('landing.signup', $data);
    }

    public function register_client(Request $request)
    {
        //dd($request);
        //Validate
        $request->validate([
            'user_type' => 'required',
            'reg_no' => 'required',
            'name' => 'required',
            'email' => 'required|unique:clients',
            'address' => 'required',
            'county' => 'required',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();

        $created_client_records = $this->create_client($data);
        // dd($created_client_records['otp_code']);

        //send user an email with otp code
        $code = $created_client_records['otp_code'];
        $mailer = (new EmailController())->verificationEmail($request->email, $created_client_records);

        Log::alert($mailer);
        //Redirect to otp code with success message
        //Enter the OTP code sent to your company email
        // return redirect("verify-subscription")->withSuccess('Otp code sent');
        return redirect('/verify-subscription')->with('success', 'Enter the OTP code sent to '.$request->email);
    }

    public function create_client(array $data)
    {
        //generate OTP code
        $otp = $this->generator(6);
        return Client::create([
            'user_type' => $data['user_type'],
            'reg_no' => $data['reg_no'],
            'name' => $data['name'],
            'email' => $data['email'],
            'otp_code' => $otp,
            'phone' => $data['phone'],
            'address' => $data['address'],
            'county' => $data['county'],
            'town' => $data['town'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function verify_subscription()
    {
        if(Auth::guard('client')->check()){
            return redirect('client-dashboard');
        }

        $data = [
            'saas_name' => 'Finduschipus',
            'title' => 'Finduschipus - Client authentication page',
            'description' => 'Enter the OTP code sent to your company email'
        ];
        return view('landing.otp', $data);
    }

    public function authenticate_client(Request $request)
    {
        $request->validate([
            'otp_code' => 'required|min:6|max:6'
        ]);

        $client = Client::where('otp_code', '=', $request->otp_code)
                        //->where('otp_verified', '=', 0) //AND Not verified
                        ->get();
        //dd($client);
        if($client->isEmpty()){
            // return redirect('verify-subscription')->with("error", "Invalid OTP code!");
            return back()->withInput()->with("error", "Invalid OTP code!");
        }
        else{
            //update the otp_verified to true
            Client::where('otp_code', $request->otp_code)
                    ->update(['otp_verified' => true]);
            return redirect('/login')->with('success', 'Your account has been verified successfully');
        }
    }

    public function login_client_page()
    {
        if(Auth::guard('client')->check()){
            return redirect('client-dashboard');
        }

        $data = [
            'saas_name' => 'Finduschipus',
            'title' => 'Finduschipus - Login page',
            'description' => 'Get started today'
        ];
        return view('landing.signin', $data);
    }

    public function login_client(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::guard('client')->attempt($credentials)){
            return redirect('client-dashboard')->with('success', 'Login success');
        }
        return redirect("login")->with('error', 'Invalid credentials!');
    }

    public function logout_client(Request $request)
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
