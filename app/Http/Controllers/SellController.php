<?php

namespace App\Http\Controllers;

use App\Models\motorcycle;
use App\Models\order;
use App\Models\Reserve;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    public function index($motorcycle_ID)
    {    
        $sell = motorcycle::find($motorcycle_ID);
        return view('sell',compact('sell'));
    }
    public function reserve_sell($id)
    {    
        $data = Reserve::find($id);
        $user = User::find($data->Customer_ID);
        $sell = motorcycle::find($data->Motorcycle_ID);
        return view('reserve-sell',compact('sell','user'));
    }
    public function sellcarDetail()
    {    
        $orders = order::all();
        $orders = DB::table('orders')
        ->join('customers','Customer_ID','=','customers.id')
        ->join('motorcycles','orders.Motorcycle_ID','=','motorcycles.motorcycle_ID')
        ->join('motorcycle_brands','motorcycles.motorcycle_Manufacturer','=','motorcycle_brands.id')
        ->join('motorcycle_models','motorcycles.motorcycle_Models','=','motorcycle_models.id')
        ->select('orders.*','customers.*','motorcycle_brands.brands_name','motorcycle_models.models_name')
        ->get();
        return view('sellcarDetail',compact('orders'));
    }
}
