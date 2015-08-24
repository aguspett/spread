<?php

namespace App\Repositories\Provincias;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable=[
                'name',
                'pais_id'
                ];

    public function pais(){
        return $this->belongsTo('App\Repositories\Paises\Pais');
            }
    public function partidos(){
        return $this->hasMany('App\Repositories\Partidos\Partido');
    }
    public function getNameAttribute($value)
    {
        return $this->attributes['name'] = ucfirst($value);
    }

}
