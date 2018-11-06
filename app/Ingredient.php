<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    // remove timestamps
    public $timestamps = false;
    
    // Many-to-one relationship with recipe
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }

}
