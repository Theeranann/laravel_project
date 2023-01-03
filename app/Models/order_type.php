<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order_type extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function order()
    {
        # code...
        return $this->belongsTo(order::class,'OrderType_ID','id');
    }
}
