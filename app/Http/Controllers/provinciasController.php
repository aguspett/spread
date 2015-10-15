<?php namespace App\Http\Controllers;

use App\Http\Requests\provinciasRequest;
use App\Http\Requests\searchProvinciasRequest;
use App\Contracts\PaisesRepositoryInterface;
use App\Entities\Provincia;
use App\Entities\Pais;
use App\Contracts\ProvinciasRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\Http\Requests\showProvinciasRequest;

class provinciasController extends Controller
{
    public function __construct(PaisesRepositoryInterface $pais, ProvinciasRepositoryInterface $porvincia)
    {
        $this->pais = $pais;
        $this->provincia = $porvincia;
    }
    public function index(){



            return view('provincias.index');
    }

    public function provinciasList($idPais){
        return $this->provincia->getProvinciasList($idPais);
    }
   /**
     * Muestra provincias para un pais
     *
     * @param showProvinciasRequest $request
     * @return vista de provincias de un pais
     */
    public function show($id)
    {
        $partidos = $this->provincia->getPartidos($id);
        $provincia= $this->provincia->getProvincia($id);
       $pais_id =  $this->provincia->getProvincia($id)->pais_id;
        list($provincias_list, $paises) = $this->getSelectlistsLists($pais_id);
        $pais =  $this->pais->getCountry($pais_id);
        return view('provincias.indexProvince', compact('provincia', 'partidos' ,'paises','provincias_list', 'pais' ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param Pais $pais
     * @param Provincia $provincia
     * @return Response
     */
    public function create(Pais $pais, Provincia $provincia)
    {
        $paises = $pais::all()->lists('name','id');
        return view('provincias.create', compact('paises','provincia','seccion','opcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(provinciasRequest $request)
    {

        Provincia::create($request->all());
        return redirect('paises/'.$request->input('pais_id'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $paises_list = $this->pais->getPaisesList();
        $provincia = $this->provincia->getProvincia($id);
       return view('provincias.edit', compact('provincia','paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, provinciasRequest $request)
    {
        $provincia =$this->provincia->updateProvincia($id, $request);
        return redirect('/provincias/'.$provincia);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

    /**
     * devuelve listas para llenar los selects
     * @param $provinciaId
     * @return array
     *
     */
   private function getSelectlistsLists($provinciaId)
    {

        $provincias_list = $this->provincia->getProvinciasList($provinciaId);
        $paises_list = $this->pais->getPaisesListWithNull();
        return array($provincias_list, $paises);
    }


}
