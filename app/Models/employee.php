<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee_role()
    {
        # code...
        return $this->hasMany(employee_role::class);
    }

    public function RepairJob()
    {
        # code...
        return $this->hasMany(repairjob::class);
    }

    public function Order()
    {
        # code...
        return $this->hasMany(order::class);
    }
}
