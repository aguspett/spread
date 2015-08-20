<?php namespace App\Repositories\Ciudades;

use App\Ciudades;

class CiudadesRepository implements CiudadesRepositoryInterface
{
    
    public function getAll()
    {
        return Ciudades::all();
    }
}
