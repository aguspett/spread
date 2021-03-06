<?php namespace App\Repositories;

use App\Contracts\PaisesRepositoryInterface;
use App\Entities\Pais;
use App\Http\Requests\PaisesRequest;
use App\Http\Requests\paisesRquest;

class PaisesRepository implements PaisesRepositoryInterface
{

    /**
     * Construye El pais en la propiedad pais
     * @param Pais $pais
     */
    public function __construct(
        Pais $pais
    ) {
        $this->pais = $pais;
    }

    /**
     * Obtiene todos los paises
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     *
     */
    public function getAll(
    )
    {
        return $this->pais->all();
    }

    /**
     *  genera lista con nombe e id de los paises con nullo al principio de la lista
     *
     * @return mixed
     */
    public function getPaisesListWithNull(
    )
    {
        $array = $this->pais->lists('name',
            'id');
        $array->prepend('-');
        return $array;


    }

    public function getPaisesList(
    )
    {
        return $this->pais->lists('name',
            'id');
    }

    /**
     * obtiener el pais
     * @param $id
     * @return mixed
     */
    public function getCountry(
        $id
    ) {
        return $this->pais->find($id);
    }

    /**
     * obntien pais con provincias
     * @param $id
     * @return mixed
     */
    public function getProvincias(
        $id
    ) {

        $pais = $this->pais->find($id);
        dd($id);
        return $pais;
    }

    /**
     * crea un nuevo pais
     * @param PaisesRequest $request
     * @return bool
     */
    public function create(
        PaisesRequest $request
    ) {

        return $this->pais->create($request->all());

    }

    /**
     * modifica un pais
     * @param PaisesRequest $request
     * @param $id
     * @return bool
     * @internal param PaisesRequest $rquest
     */
    public function updatePais(
        $id,
        PaisesRequest $request
    ) {
        $this->pais->find($id)->update($request->all());
        return $this->pais;
    }

    /**
     * borra un pais
     * @param $id
     */
    public function deletePais(
        $id
    ) {
        return $this->pais->destroy($id);
    }
}
