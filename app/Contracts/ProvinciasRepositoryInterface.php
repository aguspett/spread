<?php namespace App\Contracts;

use App\Http\Requests\provinciasRequest;
use App\Http\Requests\showProvinciasRequest;

interface ProvinciasRepositoryInterface
{
    
    public function getAll($id_pais);
    public function getProvinciasList($id_pais);
    public function getProvincia($id);
    public function getPartidos($id);
    public function create(provinciasRequest $request);
    public function updateProvincia($id, provinciasRequest $request);
    public function deleteProvincia($id);


}
