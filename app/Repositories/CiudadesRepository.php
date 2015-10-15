<?php namespace App\Repositories;

use App\Entities\Ciudad;
use App\Contracts\CiudadesRepositoryInterface as ciudadesContract;

class CiudadesRepository implements ciudadesContract
{
    public function __construct(Ciudad $ciudad)
    {
        $this->model = $ciudad;
    }

    public function getAll()
    {
        return Ciudades::all();
    }
}
