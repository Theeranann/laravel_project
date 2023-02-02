<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motorcycles_color extends Model
{
    use HasFactory;

    public function motorcycle_brand()
    {
        return $this->belongsTo(motorcycle_brand::class);
    }
    public function motorcycle_model()
    {
        return $this->belongsTo(motorcycle_model::class);
    }
    public function motorcycle()
    {
        return $this->hasMany(motorcycle::class);
    }
}
