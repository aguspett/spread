<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    public function provincia(){

        return $this->belongsTo('App\Provincia');
    }

    public function ciudades()
    {
        return $this->hasMany('App\Ciudad');
    }
}
