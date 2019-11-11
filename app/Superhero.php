<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
}
