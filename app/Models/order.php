<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee()
    {
        # code...
        return $this->belongsTo(employee::class,'Employee_ID','id');
    }
    public function customer()
    {
        # code...
        return $this->belongsTo(customer::class,'Customer_ID','id');
    }

    public function Motorcycle()
    {
        # code...
        return $this->hasOne(motorcycle::class);
    }

    public function Order_Type()
    {
        # code...
        return $this->hasOne(order_type::class);
    }
}
