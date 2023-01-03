<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class repairjob extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Parts_Used()
    {
        # code...
        return $this->hasMany(parts_used::class);
    }
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

    public function RepairMotorcycle()
    {
        # code...
        return $this->belongsTo(repairmotorcycle::class,'RepairMotorcycle_ID','id');
    }
}
