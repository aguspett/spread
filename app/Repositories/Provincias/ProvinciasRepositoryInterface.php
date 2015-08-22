<?php namespace App\Repositories\Provincias;

interface ProvinciasRepositoryInterface
{
    
    public function getAll($id_pais);
    public function getProvinciasList($id_pais);
    public function getProvincia($id);
    public function getPartidos($id);
    public function create(ProvinciassRequest $request);
    public function updateProvincia($id, ProvinciasRequest $request);
    public function deleteProvincia($id);

}
