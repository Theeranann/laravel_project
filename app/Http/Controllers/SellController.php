<?php

namespace App\Http\Controllers;

use App\Models\motorcycle;
use Illuminate\Http\Request;

class SellController extends Controller
{
    protected $primaryKey = 'motorcycle_ID';
    public function index($motorcycle_ID)
    {
        
        $sell = motorcycle::find($motorcycle_ID);
        return view('sell',compact('sell'));
    }
}
