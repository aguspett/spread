<?php namespace App\Repositories;

use App\Contracts\CiudadesRepositoryInterface as ciudadesContract;
use App\Entities\Ciudad;

class CiudadesRepository implements ciudadesContract
{
    public function __construct(
        Ciudad $ciudad
    ) {
        $this->model = $ciudad;
    }

    public function getAll(
    )
    {
        return Ciudades::all();
    }
}
