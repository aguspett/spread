<?php namespace App\Repositories\Provincias;

use App\Repositories\Provincias;

class ProvinciasRepository implements ProvinciasRepositoryInterface
{
    /**
     * Construye El pais en la propiedad pais
     * @param Provincia $provincias
     */
    public function __construct( Provincia $provincias)
    {
        $this->provincia = $provincias;
    }

    public function getAll($id_pais)
    {
        return $this->provincia->where('pais_id', $id_pais)->get();
    }

    public function getProvinciasList($id_pais)
    {
        $array =  $this->provincia->where('pais_id', $id_pais)->get()->lists('name','id');
        $array->prepend('-')->toJson();
        return  $array;

    }

    public function getProvincia($id)
    {
        // TODO: Implement getProvincia() method.
    }

    public function getPartidos($id)
    {
      $partidos = $this->provincia->find($id);
        $partidos->partidos ;
        return $partidos;
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
