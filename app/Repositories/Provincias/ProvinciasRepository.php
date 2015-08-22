<?php namespace App\Repositories\Provincias;

use App\Repositories\Provincias;

class ProvinciasRepository implements ProvinciasRepositoryInterface
{
    
    public function getAll($id_pais)
    {
        return $this->provincia->all($id_pais);
    }

    public function getProvinciasList($id_pais)
    {
        // TODO: Implement getProvinciasList() method.
    }

    public function getProvincia($id)
    {
        // TODO: Implement getProvincia() method.
    }

    public function getPartidos($id)
    {
        // TODO: Implement getPartidos() method.
    }

    public function create(ProvinciassRequest $request)
    {
        // TODO: Implement create() method.
    }

    public function updateProvincia($id, ProvinciasRequest $request)
    {
        // TODO: Implement updateProvincia() method.
    }

    public function deleteProvincia($id)
    {
        // TODO: Implement deleteProvincia() method.
    }
}
