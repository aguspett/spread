<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = [
        'name',
        'pais_id'
    ];
    protected $table = 'provincias';

    public function pais(
    )
    {
        return $this->belongsTo('App\Entities\Pais');
    }

    public function partidos(
    )
    {
        return $this->hasMany('App\Entities\Partido');
    }

    public function getNameAttribute(
        $value
    ) {
        return $this->attributes['name'] = ucfirst($value);
    }

}
