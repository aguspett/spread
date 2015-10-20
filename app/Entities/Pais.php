<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['name'];
    protected $table = 'paises';

    /**
     * un pais tiene muchas provincias
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provincias(
    )
    {
        return $this->hasMany('App\Entities\Provincia');
    }

    public function createPais(
        $request
    ) {
        $pais = $this->save($request);
        return $pais;
    }

    public function setNameAttribute(
        $value
    ) {
        return $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute(
        $value
    ) {
        return $this->attributes['name'] = ucfirst($value);
    }

    public function getNameListAtribute(
    )
    {
        return $this->lists('id',
            'name');
    }

}
