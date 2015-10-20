<?php namespace App\Repositories;

use App\Contracts\ProvinciasRepositoryInterface as provinciasContract;
use App\Entities\Provincia;
use App\Http\Requests\provinciasRequest;

class ProvinciasRepository implements provinciasContract
{

    public $parentKeyName = 'pais_id';
    public $childName = 'partidos';
    /**
     * Construye la provicias en la propiedad pais
     * @param Provincia $provincias
     */
    public function __construct(
        Provincia $provincias
    ) {
        $this->model = $provincias;
    }
    /**
     * @return string
     */

    public function getParentKeyName(
    )
    {
        return $this->parentKeyName;
    }

    /**
     * @return string
     */
    public function getChildName(
    )
    {
        return $this->childName;
    }
    /**
     * @param null $parentKeyName
     * @return ProvinciasRepository
     */
    public function setParentKeyName(
        $parentKeyName
    ) {
        $this->parentKeyName = $parentKeyName;
    }

    /**
     * @param null $childName
     * @return ProvinciasRepository
     */
    public function setChildName(
        $childName
    ) {
        $this->childName = $childName;
    }


    public function getAll(
      $id
    ) {
        return $this->model->where($this->getParentKeyName(),
            $id);
    }

    public function getList( $id
    ) {
        $array = $this->model->where($this->parentKeyName,
            $id)->get()->lists('name',
            'id');
        $array->prepend('-')->toJson();
        return $array;

    }

    public function getProvincia(
        $id
    ) {
        return $this->model->find($id);
    }

    public function getPartidos(
        $id
    ) {
        return $this->getChilds('partidos',$id);
    }

    public function create($parentFormInputName,
        provinciasRequest $request
    ) {
        $parentKeyName = $this->getParentKeyName();
        $this->model->name = $request->input('name');
        $this->model->$parentKeyName = $request->input($parentFormInputName);
        $this->model->save();
    }

    /**
     * @param provinciasRequest $request
     * @return int  id de la provincia modificada
     */
    public function updateProvincia(
        $id,
        ProvinciasRequest $request
    ) {
        return $this->model->find($id)->update($request->all());

    }

    public function deleteProvincia(
        $id
    ) {
        // TODO: Implement deleteProvincia() method.
    }

    public function getChilds(

    $id
    ) {
        $childName = $this->getChildName();
        $this->model->find($id)->$childName()->orderBy('name');
    }
}
