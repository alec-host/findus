<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    //
    public function index()
    {
        if(Auth::guard('client')->check()){
            //Get client details
            $client = Auth::guard('client')->user();
            // dd($client);

            $data = [
                'saas_name' => 'Finduschipus',
                'title' => 'FINDUSCHIPUS MANAGEMENT SYSTEM | '.$client['name'].' Settings',
                'client' => $client,
                'user_type' => $client['user_type'],
                'name' => $client['name'],
                'email' => $client['email'],
                'phone' => $client['phone'],
                'address' => $client['address'],
                'county' => $client['county'],
                'town' => $client['town'],

                'grn' => $this->generator(5),
            ];
            // dd($data);

            return view('settings.general', $data);
        }

        return redirect('login')->with('error', 'Access restricted to subscribed clients only');
    }
}