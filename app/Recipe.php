<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // one-to-many relationship with ingredients
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }
}
