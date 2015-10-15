<?php namespace App\Repositories;
use App\Contracts\PartidosRepositoryInterface as partidosContract;
use App\Entities\Partido;
class PartidosRepository implements partidosContract
{
    public function __Construct( Partido $partido)
    {
        $this->model = $partido;
    }
    public function getAll()
    {
        //
    }
}
