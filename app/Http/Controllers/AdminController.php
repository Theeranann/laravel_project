<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use App\Models\motorcycle;
use App\Models\motorcycle_brand;
use App\Models\motorcycle_model;
use App\Models\motorcycles_color;
use App\Models\order;
use App\Models\parts;
use App\Models\Reserve;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function index()
    {
        $motorcycle = DB::table('motorcycles')
            ->join('motorcycle_brands', 'motorcycle_Manufacturer', '=', 'motorcycle_brands.id')
            ->join('motorcycle_models', 'motorcycle_Models', '=', 'motorcycle_models.id')
            ->select('motorcycles.*', 'motorcycle_brands.brands_name', 'motorcycle_models.models_name')
            ->whereNull('motorcycles.deleted_at')
            ->get();

        return view('AllCar', compact('motorcycle'));
        // $motorcycle = motorcycle::all();
        // $motorcycle = DB::table('motorcycles')
        //     ->join('motorcycle_brands', 'motorcycle_Manufacturer', '=', 'motorcycle_brands.id')
        //     ->join('motorcycle_models', 'motorcycle_Models', '=', 'motorcycle_models.id')
        //     ->select('motorcycles.*', 'motorcycle_brands.brands_name', 'motorcycle_models.models_name')
        //     ->whereNull('deleted_at')
        //     ->get();
        // $brand = motorcycle_brand::all();
        // $models = motorcycle_model::all();
        // return view('AllCar', compact('motorcycle'));
        // return view('AllCar',compact('motorcycle','brand','models'));
    }
    function addPage()
    {
        $brands = motorcycle_brand::all();
        return view('AddCar', compact('brands'));
        // return view('AddCar');
    }

    //select box brand
    public function getBrand($id)
    {
        $dataModels = motorcycle_model::where('brands_id', $id)->get();
        return response()->json($dataModels);
    }
    //select box getColor
    public function getColor($id)
    {
        $dataColor = motorcycles_color::where('models_id', $id)->get();
        return response()->json($dataColor);
    }


    function buyCarPage()
    {
        return view('buycar');
    }
    function reserveCarPage()
    {
        // $reserve = Reserve::all();
        $reserve = DB::table('reserves')
        ->join('users', 'reserves.Customer_ID', '=', 'users.id')
        ->join('motorcycles', 'reserves.Motorcycle_ID', '=', 'motorcycles.motorcycle_ID')
        ->join('motorcycle_brands', 'motorcycles.motorcycle_Manufacturer', '=', 'motorcycle_brands.id')
        ->join('motorcycle_models', 'motorcycles.motorcycle_Models', '=', 'motorcycle_models.id')
        ->select('reserves.*', 'users.name', 'motorcycles.*', 'motorcycle_brands.brands_name', 'motorcycle_models.models_name')
        ->whereNull('motorcycles.deleted_at')
        ->get();
        return view('reserveCar',compact('reserve'));
    }

    public function detailPage($motorcycle_ID)
    {
        $detail = motorcycle::find($motorcycle_ID);
        return view('CarDetail', compact('detail'));
    }

    public function SoftDeleteCar($motorcycle_ID)
    {
        motorcycle::find($motorcycle_ID)->delete();
        $motorcycle = motorcycle::all();
        return redirect()->back()->with('success', 'deleted successfully!');
    }
    public function SoftDelete_brand($id)
    {
        motorcycle_brand::find($id)->delete();
        return redirect()->back()->with('success', 'deleted successfully!');
        // return redirect('/management-add-page')->with('success', 'deleted successfully!');
    }
    public function SoftDelete_model($id)
    {
        motorcycle_model::find($id)->delete();
        return redirect()->back()->with('success', 'deleted successfully!');
        // return redirect('/management-add-page')->with('success', 'deleted successfully!');
    }
    public function SoftDelete_color($id)
    {
        motorcycles_color::find($id)->delete();
        return redirect()->back()->with('success', 'deleted successfully!');
        // return redirect('/management-add-page')->with('success', 'deleted successfully!');
    }

    //part
    public function showPartPage()
    {
        $showparts = parts::all();
        return view('Allpart', compact('showparts'));
    }
    public function addpartPage()
    {
        return view('AddPart');
    }

    public function managementPage()
    {
        $motorcycle_brand = motorcycle_brand::all();
        $motorcycle_model = motorcycle_model::all();
        return view('management-Page',compact('motorcycle_brand','motorcycle_model'));
    }

    public function managementModelPage()
    {
        $motorcycle_brand = motorcycle_brand::all();
        $motorcycle_model = motorcycle_model::all();
        return view('management-Model',compact('motorcycle_brand','motorcycle_model'));
    }
    public function managementColorPage()
    {
        $motorcycle_brand = motorcycle_brand::all();
        $motorcycle_model = motorcycle_model::all();
        $motorcycle_color = motorcycles_color::all();
        return view('management-Color',compact('motorcycle_brand','motorcycle_model','motorcycle_color'));
    }
    public function permissionPage()
    {
        $user = User::all();
        return view('management-permission',compact('user'));
    }
    public function permission_change(Request $request)
    {
        // $user = User::all();
        // return view('test',compact('user'));
        $user = User::find((int)$request->input('user_id') );
        $user->is_admin = (int)$request->input('Role');
        $user->save();
        return redirect()->back()->with('success', 'successfully!');
    }


    // public function select_brands()
    // {
    //     $brands = motorcycle_brand::table('motorcycle_brands')->get();
    //     return view('AddCar', compact('brands'));
    // }


    public function insert_motocycles(Request $request)
    {
        $new_motorcycle = new motorcycle;
        $new_motorcycle->motorcycle_Models = $request->models;
        $new_motorcycle->motorcycle_Manufacturer = $request->Manufacturer;
        $new_motorcycle->motorcycle_Year = $request->Year;
        $new_motorcycle->motorcycle_LicensePlate = $request->LicensePlate;
        $new_motorcycle->motorcycle_Corlor = $request->color;
        $new_motorcycle->motorcycle_mileage = $request->mileage;
        $new_motorcycle->motorcycle_EngineNumber = $request->EngineNumber;
        $new_motorcycle->motorcycle_VinNumber = $request->VinNumber;
        $new_motorcycle->motorcycle_Price = $request->Price;
        $new_motorcycle->SoldOut = "N";
        $new_motorcycle->save();

        $motorcycle = motorcycle::all();
        return redirect('/motorcycle-overview');
    }

    public function insert_sell(Request $request)
    {
        //Customer Data
        $new_customer = new customer;
        $new_customer->customers_firstName = $request->firstName;
        $new_customer->customers_lastName = $request->lastName;
        $new_customer->customers_Gender = $request->Gender;
        $new_customer->customers_BirthDate = $request->BirthDate;
        $new_customer->customers_phoneNumber = $request->phoneNumber;
        $new_customer->customers_Address = $request->Address;

        $motorcycle_ID = $request->motorcycle_ID;
        $Price = $request->Price;

        $new_customer->save();

        //Customer Sell Order
        $new_sell = new order;
        $new_sell->OrderType_ID = 1;
        $new_sell->Employee_ID = 1;
        $new_sell->Customer_ID = $new_customer->id;
        $new_sell->Motorcycle_ID = $motorcycle_ID;
        $new_sell->Order_Price = $Price;
        $new_sell->Buys_Order_Status = '1';
        $new_sell->save();

        return redirect('/motorcycle-sell-list');

    }

    public function insert_parts(Request $request)
    {
        $new_part = new parts;
        $new_part->Parts_Name = $request->Name;
        $new_part->Parts_UnitPrice = $request->Price;
        $new_part->Parts_InStock = $request->Unit;
        $new_part->Parts_img = $request->Descript;
        $new_part->Parts_Description = $request->img;
        $new_part->save();

        $showparts = parts::all();
        return redirect('/motorcycle-part-list');
    }

    public function insert_brand(Request $request)
    {
        $new_brand = new motorcycle_brand();
        $new_brand->brands_name = $request->name;
        $new_brand->save();

        return redirect('/management-add-page');
    }
    public function insert_model(Request $request)
    {
        $new_model = new motorcycle_model();
        $new_model->brands_id = $request->Manufacturer;
        $new_model->models_name = $request->name;
        $new_model->save();

        return redirect('/management-add-model');
    }
    public function insert_color(Request $request)
    {
        $new_color = new motorcycles_color();
        $new_color->brands_id = $request->Manufacturer;
        $new_color->models_id = $request->models;
        $new_color->color_name = $request->name;
        $new_color->save();

        return redirect('/management-add-color');
    }
}
