<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parts_used extends Model
{
    use HasFactory;

    public function Parts()
    {
        # code...
        return $this->belongsTo(parts_used::class,'Parts_ID','id');
    }

    public function repairjob()
    {
        # code...
        return $this->belongsTo(repairjob::class,'RepairJob_ID','id');
    }
}
