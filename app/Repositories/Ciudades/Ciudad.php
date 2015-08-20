<?php

namespace App\Repositories\Ciudades;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    public function partido()
    {
        return $this->belongsTo('App\Partido');
    }

}
