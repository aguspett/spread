<?php namespace App\Repositories\Paises;

use App\Http\Requests\PaisesRequest;

interface PaisesRepositoryInterface
{
    
    public function getAll();
    public function getPaisesList();
    public function getPaisesListWithNull();
    public function getCountry($id);
    public function getProvincias($id);
    public function create(PaisesRequest $request);
    public function updatePais($id, PaisesRequest $request);
    public function deletePais($id);

}
