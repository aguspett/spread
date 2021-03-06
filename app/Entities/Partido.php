<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    public function getNameAttribute(
        $value
    ) {
        return $this->attributes['name'] = ucfirst($value);
    }

    public function provincia(
    )
    {

        return $this->belongsTo('App\Provincia');
    }

    public function ciudades(
    )
    {
        return $this->hasMany('App\Ciudad');
    }
}
