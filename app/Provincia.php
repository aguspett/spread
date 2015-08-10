<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable=[
                'name',
                'pais_id'
                ];

    public function pais(){
        return $this->belongsTo('App\Pais');
            }
    public function partidos(){
        return $this->hasMany('App\Partido');
    }

    public function selectDefault($selectList,$emptyLabel)
    {
        return array(''=>$emptyLabel) + $selectList;
    }

/**
     * devuelve lista de paises
     * @return array
     */
    public function getPaisesListAtributte()
    {
        return App\Pais::all();
    }
}
