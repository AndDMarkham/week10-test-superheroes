<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = [
        'superhero_id',
        'user_id',
        'subject',
        'description'
    ];

    public function superhero()
    {
        return $this->belongsTo('App\Superhero');
    }
}
