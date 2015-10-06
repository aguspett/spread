<?php namespace App\Repositories;

use App\Ciudades;

class CiudadesRepository implements CiudadesRepositoryInterface
{
    
    public function getAll()
    {
        return Ciudades::all();
    }
}
