<?php namespace App\Contracts;

use App\Http\Requests\provinciasRequest;

interface ProvinciasRepositoryInterface
{

    public function getAll(
         $id
    );

    public function getList(
      $id
    );

    public function getProvincia(
        $id
    );

    public function getPartidos(
        $id
    );

    public function create($parentFormInputName,
        provinciasRequest $request
    );

    public function updateProvincia(
        $id,
        provinciasRequest $request
    );

    public function deleteProvincia(
        $id
    );


}
