<?php namespace App\Repositories\Paises;

use App\Http\Requests\PaisesRequest;
use App\Http\Requests\paisesRquest;

class PaisesRepository implements PaisesRepositoryInterface
{

    /**
     * Construye El pais en la propiedad pais
     * @param Pais $pais
     */
    public function __construct( Pais $pais)
    {
        $this->pais = $pais;
    }

    /**
     * Obtiene todos los paises
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     *
     */
    public function getAll()
    {
       return $this->pais->all();
    }

    /**
     *  genera lista con nombe e id de los paises
     *
     * @return mixed
     */
    public function getPaisesList()
    {
        return $this->pais->lists('name','id');
    }
    /**
     * obtiener el pais
     * @param $id
     * @return mixed
     */
    public function getCountry($id)
    {
        return $this->pais->find($id);
    }

    /**
     * obntien pais con provincias
     * @param $id
     * @return mixed
     */
    public function getProvincias($id)
    {

        $pais = $this->pais->find($id);
        $pais->provincias;
        return $pais;
    }

    /**
     * crea un nuevo pais
     * @param PaisesRequest $request
     * @return bool
     */
    public function create (PaisesRequest $request){

      return $this->pais->create($request->all()) ;

    }

    /**
     * modifica un pais
     * @param PaisesRequest $request
     * @param $id
     * @return bool
     * @internal param PaisesRequest $rquest
     */
    public function updatePais($id, PaisesRequest $request)
    {
      $this->pais->find($id)->update($request->all());
        return $this->pais;
   }

    /**
     * borra un pais
     * @param $id
     */
    public function deletePais($id)
    {
       return $this->pais->destroy($id);
    }
}
