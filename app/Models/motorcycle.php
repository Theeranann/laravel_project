<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class motorcycle extends Model
{
    use HasFactory;
    use SoftDeletes; 
    //change primarykey from id to motorcycle_ID
    protected $primaryKey = 'motorcycle_ID';
    public function order()
    {
        # code...
        return $this->belongsTo(order::class,'Motorcycle_ID','id');
    }
    public function motorcycle_brand()
    {
        return $this->belongsTo(motorcycle_brand::class,'motorcycle_Manufacturer', 'id');
    }
    public function motorcycle_model()
    {
        return $this->belongsTo(motorcycle_model::class,'motorcycle_Models', 'id');
    }
    public function motorcycle_color()
    {
        return $this->belongsTo(motorcycles_color::class,'motorcycles_colors','id');
    }
}