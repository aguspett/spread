<?php

namespace App\Http\Controllers;

use App\Http\Requests\provinciasRequest;
use App\Http\Requests\searchProvinciasRequest;
use App\Provincia;
use App\Pais;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class provinciasController extends Controller
{
    public function index(Pais $pais,Request $request){

            $paises = $pais->paisList();


            return view('provincias.index', compact('paises'));


    }
    /**
     * Muestra prvincias para un pais
     *
     * @return vista de provincias de un pais
     */
    public function indexCountry(searchProvinciasRequest $request)
    {

     return redirect('paises/'.$request->input('pais_id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Pais $pais, Provincia $provincia)
    {

        $seccion= 'Provincias';
        $opcion = 'Ver provincias';
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        dd($request);
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
