<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class parts extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Parts_Used()
    {
        # code...
        return $this->hasMany(parts_used::class);
    }
}
