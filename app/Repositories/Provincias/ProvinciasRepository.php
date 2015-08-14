<?php namespace App\Repositories\Provincias;

use App\Provincia;

class ProvinciasRepository implements ProvinciasRepositoryInterface
{
    
    public function getAll()
    {
        return Provincias::all();
    }
}
