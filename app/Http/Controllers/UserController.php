<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motorcycle;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        $motorcycle = DB::table('motorcycles')
            ->join('motorcycle_brands', 'motorcycle_Manufacturer', '=', 'motorcycle_brands.id')
            ->join('motorcycle_models', 'motorcycle_Models', '=', 'motorcycle_models.id')
            ->select('motorcycles.*', 'motorcycle_brands.brands_name', 'motorcycle_models.models_name')
            ->whereNull('motorcycles.deleted_at')
            ->get();

        return view('user.main-page', compact('motorcycle'));

    }
    public function MotorcycleDetailPage($motorcycle_ID)
    {
        $detail = motorcycle::find($motorcycle_ID);
        return view('user.motorcycle-detail', compact('detail'));
    }
    public function MotorcycleReservePage($motorcycle_ID)
    {
        $detail = motorcycle::find($motorcycle_ID);
        return view('user.motorcycle-reserve', compact('detail'));
    }
    public function ReservePaymentPage($motorcycle_ID)
    {
        $detail = motorcycle::find($motorcycle_ID);
        return view('user.motorcycle-payment', compact('detail'));
    }
    public function insert_payment(Request $request)
    {
        $new_reserve = new Reserve();
        $new_reserve->Customer_ID = Auth::id();
        $new_reserve->Motorcycle_ID = $request->id;
        $new_reserve->save();
        return redirect('/main-page');
    }
}
