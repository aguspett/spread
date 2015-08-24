<?php

namespace App\Http\Controllers;

use App\Http\Requests\provinciasRequest;
use App\Http\Requests\searchProvinciasRequest;
use App\Repositories\Paises\PaisesRepositoryInterface;
use App\Repositories\Provincias\Provincia;
use App\Repositories\Paises\Pais;
use App\Repositories\Provincias\ProvinciasRepositoryInterface;
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

        $paises_list = $this->pais->getPaisesListWithNull();

            return view('provincias.index', compact('paises_list'));
    }

    public function provinciasList($id_pais)
    {

     return $this->provincia->getProvinciasList($id_pais);
    }
    /**
     * Muestra provincias para un pais
     *
     * @param showProvinciasRequest $request
     * @return vista de provincias de un pais
     */
    public function show(showProvinciasRequest $request)
    {
        $provincia = $this->provincia->getPartidos($request->input('provincias_list'));
        $provincias_list = $this->provincia->getProvinciasList($request->input('paises_list'));
        $paises_list = $this->pais->getPaisesListWithNull();
        $pais =  $this->pais->getCountry($request->input('paises_list'));
        return view('provincias.indexProvince', compact('provincia','paises_list','provincias_list', 'pais' ));
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
    public function edit(Provincia $provincia)
    {
        $paises = Pais::all()->lists('name','id');
       return view('provincias.edit', compact('provincia','paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(provinciasRequest $request, Provincia $provincia)
    {
        $provincia->update($request->all());
        return redirect('paises/'.$request->input('pais_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        dd($request);
    }


}
