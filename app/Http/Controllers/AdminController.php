<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motorcycle;

class AdminController extends Controller
{
    //
    function index(){
        $motorcycle = motorcycle::all();
        return view('admin',compact('motorcycle'));
    }
    public function insert_motocycles(Request $request)
    {
        # code...
        $new_motorcycle = new motorcycle;
        $new_motorcycle->motorcycle_Models = $request->models;
        $new_motorcycle->motorcycle_Manufacturer = $request->Manufacturer;
        $new_motorcycle->motorcycle_Year = $request->Year;
        $new_motorcycle->motorcycle_LicensePlate = $request->LicensePlate;
        $new_motorcycle->motorcycle_Corlor = $request->Corlor;
        $new_motorcycle->motorcycle_mileage = $request->mileage;
        $new_motorcycle->motorcycle_EngineNumber = $request->EngineNumber;
        $new_motorcycle->motorcycle_VinNumber = $request->VinNumber;
        $new_motorcycle->motorcycle_Price = $request->Price;
        $new_motorcycle->SoldOut = "N";
        $new_motorcycle->save();

        $motorcycle = motorcycle::all();
        return view('admin',compact('motorcycle'));
    }
}
