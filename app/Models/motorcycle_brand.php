<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motorcycle_brand extends Model
{
    use HasFactory;
    public function motorcycle_model()
    {
        return $this->hasMany(motorcycle_model::class);
    }
    public function motorcycle_color()
    {
        return $this->hasMany(motorcycles_color::class);
    }
    public function motorcycle()
    {
        return $this->hasMany(motorcycle::class);
    }
}
