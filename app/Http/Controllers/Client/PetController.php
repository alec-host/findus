<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmailController;

class PetController extends Controller
{
    //
    public function index()
    {
        if(Auth::guard('client')->check()){
            //Get client details
            $client = Auth::guard('client')->user();
            // dd($client);

            //Fetch a list of categories from the categories view_table
            $pets_list = Pet::where('owner_id', '=', $client->id)->get();
            // dd($categories_list);

            $pet_owners = Client::where('otp_verified', '=', TRUE)
                                  ->where('id', '!=', $client->id)
                                  ->get();
            // dd($pet_owners);

            $data = [
                'saas_name' => 'Finduschipus',
                'title' => 'FINDUSCHIPUS MANAGEMENT SYSTEM | '.$client['name'].' Categories',
                'client_id' => $client['id'],
                'user_type' => $client['user_type'],
                'name' => $client['name'],
                'email' => $client['email'],
                'phone' => $client['phone'],
                'address' => $client['address'],
                'county' => $client['county'],
                'town' => $client['town'],
                'pets' => $pets_list,
                'pet_owners' => $pet_owners,

                'grn' => $this->generator(5),
            ];
            // dd($data);

            return view('pet.index', $data);
        }

        return redirect('login')->with('error', 'Access restricted to subscribed clients only');
    }

    public function add_pet(Request $request)
    {
        // dd($request);
        //Make sure the client is logged in
        if(!Auth::guard('client')->check()){
            return redirect('login')->with('error', 'Pet addition restricted');
        }

        //validate data
        $request->validate([
            'name' => 'required',
            'microchip_no' => 'required',
            'coat_color' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'clinic_registered' => 'required',
        ]);

        //submit to db
        $data = $request->all();
        $created_pet = $this->create_pet($data);
        // dd($created_pet);
        if($created_pet){
            //refresh the current page
            return redirect()->back()->with('success', 'pet addition success');
        }
        else{
            //refresh the current page
            return redirect()->back()->with('error', 'pet addition failed');
        }
    }

    public function create_pet($data)
    {
        $client = Auth::guard('client')->user();
        $pet_url = '';
        $photo = '';
        return Pet::create([
            'url' => $pet_url ?? 'N/A',
            'owner_id' => $client['id'],
            'photo' => $photo ?? 'N/A',
            'name' => $data['name'],
            'microchip_no' => $data['microchip_no'],
            'coat_color' => $data['coat_color'],
            'age' => $data['age'],
            'species' => $data['species'],
            'breed' => $data['breed'],
            'clinic_registered' => $data['clinic_registered'],
            'gender' => $data['gender']
        ]);
    }

    public function update_pet(Request $request, $pet_id)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'microchip_no' => 'required',
            'coat_color' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'clinic_registered' => 'required',
        ]);

        //update
        $update_pet = Pet::where('id', '=', $pet_id)
                        ->update([
                            'name' => $request->name,
                            'microchip_no' => $request->microchip_no,
                            'coat_color' => $request->coat_color,
                            'age' => $request->age,
                            'gender' => $request->gender,
                            'species' => $request->species,
                            'breed' => $request->breed,
                            'clinic_registered' => $request->clinic_registered
                        ]);

        //refresh page
        if(!$update_pet){
            return  redirect()->back()->with('error', 'Pet records update failed');// redirect('/login')->with('success', 'Your password has been changed!');
        }

        return  redirect()->back()->with('success', 'Pet record updated');
    }

    public function transfer_pet(Request $request, $pet_id)
    {
        //dd($request, $pet_id);

        $request->validate([
            'pet_owner' => 'required'
        ]);

        //get pet information
        $pet  = Pet::find($pet_id);
        //dd($pet);

        // get current owner_id & email
        $owner_id = $pet->owner_id;

        // get recipient_id
        $recipient = Client::where('email', '=', $request->pet_owner)->first();
        //dd($recipient->email);

        // Send email notification to recipient
        $mailer = (new EmailController())->petTransferEmailNotification($recipient->email, $recipient);

        if(!$mailer)
        {
            return  redirect()->back()->with('error', 'Pet transfer failed');
        }

        // Update pet's owner id
        Pet::where('id', $pet_id)
                ->update([
                    'owner_id' => $recipient->id
                ]);

        // Refresh page
        return  redirect()->back()->with('success', 'Pet transfer is successfully completed');
    }

    public function delete_pet($pet_id)
    {
        //dd($pet_id);
        $pet = Pet::find($pet_id);
        if(!$pet->delete()){
            return  redirect()->back()->with('error', 'Pet deletion failed');// redirect('/login')->with('success', 'Your password has been changed!');
        }

        return  redirect()->back()->with('success', 'Pet record deleted');
    }
}
