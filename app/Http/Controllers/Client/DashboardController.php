<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Category;
use App\Models\Client;
use App\Models\Item;
use App\Models\Receiving;
use App\Models\Requisition;
use App\Models\Supplier;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
// use OgegoCharts;
// use ArielMejiaDev\LarapexCharts\Facades\LarapexChart
use ArielMejiaDev\LarapexCharts\LarapexChart as OgegoCharts;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::guard('client')->check()){
            //Get client details
            $client = Auth::guard('client')->user();
            // dd($client);

            $goods_received_number = 'GRN#'.$this->generator(5);

            //Totals
            $total_pets = $this->get_total_client_pets($client->id);
            $total_categories = $this->get_total_client_categories($client->id);
            $total_items = $this->get_total_client_items($client->id);
            $total_suppliers = $this->get_total_suppliers($client->id);
            $total_requisitions = $this->get_total_requisitions($client->id);
            $total_receivings = $this->get_total_receivings($client->id);
            //dd($total_suppliers);

            // 1. Items chart
            $pets_registration_chart = (new OgegoCharts)->setTitle('Pets Registration Payments')
            ->setDataset([120980, 540000, 271081]) //Item quantities
            ->setLabels(['MPESA', 'VISA_CARD', 'MASTER_CARD']); //Item names

            $data = [
                'saas_name' => 'Finduschipus',
                'title' => 'FINDUSCHIPUS | Dashboard',
                'user_type' => $client['user_type'],
                'name' => $client['name'],
                'email' => $client['email'],
                'phone' => $client['phone'],
                'address' => $client['address'],
                'county' => $client['county'],
                'town' => $client['town'],
                'total_pets' => $total_pets,
                'total_categories' => $total_categories,
                'total_items' => $total_items,
                'total_suppliers' => $total_suppliers,
                'total_requisitions' => $total_requisitions,
                'total_receivings' => $total_receivings,
                'grn' => $this->generator(5),
                'pets_registration_chart' => $pets_registration_chart
            ];
            //dd($data);

            return view('client.index', $data);
        }

        return redirect('login')->with('error', 'Access restricted to subscribed clients only');
    }

    private function get_total_client_pets($client_id)
    {
        $pets = Pet::where('owner_id', '=', $client_id)->get();
        return count($pets);
    }

    private function get_total_client_categories($client_id)
    {
        $categories = Category::where('client_id', '=', $client_id)->get();
        return count($categories);
    }

    private function get_total_client_items($client_id)
    {
        $items = Item::where('client_id', '=', $client_id)->get();
        return count($items);
    }

    private function get_total_suppliers($client_id)
    {
        $suppliers = Supplier::where('client_id', '=', $client_id)->get();
        return count($suppliers);
    }

    private function get_total_receivings($client_id)
    {
        $receivings = Receiving::where('client_id', '=', $client_id)->get();
        return count($receivings);
    }

    private function get_total_requisitions($client_id)
    {
        $requisitions = Requisition::where('client_id', '=', $client_id)->get();
        return count($requisitions);
    }
}
