<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['name'];
    protected $table = 'paises';

    /**
     * un pais tiene muchas provincias
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provincias (){
        return $this->hasMany('App\Provincia');
    }
    public function createPais($request)
    {
        $pais = $this->save($request);
        return $pais;
    }

    public function paisList()
    {
        return $this->lists('name','id');
    }
}
