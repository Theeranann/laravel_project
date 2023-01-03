<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class repairmotorcycle extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function RepairJob()
    {
        # code...
        return $this->hasMany(repairjob::class);
    }
}
