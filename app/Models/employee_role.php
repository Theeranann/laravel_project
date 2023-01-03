<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee_role extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee()
    {
        # code...
        return $this->belongsTo(employee::class,'employees_Role_ID','id');
    }
}
