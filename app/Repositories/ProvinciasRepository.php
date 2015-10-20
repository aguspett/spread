<?php namespace App\Repositories;

use App\Contracts\ProvinciasRepositoryInterface as provinciasContract;
use App\Entities\Provincia;
use App\Http\Requests\provinciasRequest;

class ProvinciasRepository implements provinciasContract
{
    /**
     * Construye la provicias en la propiedad pais
     * @param Provincia $provincias
     */
    public function __construct(
        Provincia $provincias
    ) {
        $this->provincia = $provincias;
    }

    public function getAll(
        $id_pais
    ) {
        return $this->provincia->where('pais_id',
            $id_pais);
    }

    public function getList(
        $id_pais
    ) {
        $array = $this->provincia->where('pais_id',
            $id_pais)->get()->lists('name',
            'id');
        $array->prepend('-')->toJson();
        return $array;

    }

    public function getProvincia(
        $id
    ) {
        return $this->provincia->find($id);
    }

    public function getPartidos(
        $id
    ) {
        $partidos = $this->provincia->find($id)->partidos()->orderBy('name')->paginate(15);
        return $partidos;
    }

    public function create(
        provinciasRequest $request
    ) {
        // TODO: Implement create() method.
    }

    /**
     * @param provinciasRequest $request
     * @return int  id de la provincia modificada
     */
    public function updateProvincia(
        $id,
        ProvinciasRequest $request
    ) {
        return $this->provincia->find($id)->update($request->all());

    }

    public function deleteProvincia(
        $id
    ) {
        // TODO: Implement deleteProvincia() method.
    }
}
