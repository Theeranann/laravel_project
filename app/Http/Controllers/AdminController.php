<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motorcycle;
use App\Models\motorcycle_brand;
use App\Models\motorcycle_model;
use App\Models\motorcycles_color;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function index(){
        // $motorcycle = motorcycle::all();
        $motorcycle = DB::table('motorcycles')
        ->join('motorcycle_brands','motorcycle_Manufacturer','=','motorcycle_brands.id')
        ->join('motorcycle_models','motorcycle_Models','=','motorcycle_models.id')
        ->select('motorcycles.*','motorcycle_brands.brands_name','motorcycle_models.models_name')
        ->get();
        // $brand = motorcycle_brand::all();
        // $models = motorcycle_model::all();
        return view('AllCar',compact('motorcycle'));
        // return view('AllCar',compact('motorcycle','brand','models'));
    }
    function addPage(){
        $brands = motorcycle_brand::all();
        return view('AddCar', compact('brands'));
        // return view('AddCar');
    }

    //select box brand
    public function getBrand($id){
        $dataModels = motorcycle_model::where('brands_id',$id)->get();
        return response()->json($dataModels);
    }
    //select box getColor
    public function getColor($id){
        $dataColor = motorcycles_color::where('models_id',$id)->get();
        return response()->json($dataColor);
    }
    

    function buyCarPage(){
        return view('buycar');
    }
    function reserveCarPage(){
        return view('reserveCar');
    }

    public function detailPage($motorcycle_ID)
    {    
        $detail = motorcycle::find($motorcycle_ID);
        return view('CarDetail',compact('detail'));
    }

    public function SoftDeleteCar($motorcycle_ID)
    {
        motorcycle::find($motorcycle_ID)->delete();
        $motorcycle = motorcycle::all();
        return redirect()->back()->with('success', 'deleted successfully!');
    }



    // public function select_brands()
    // {
    //     $brands = motorcycle_brand::table('motorcycle_brands')->get();
    //     return view('AddCar', compact('brands'));
    // }


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
        return redirect('/AllCar');
    }
}
