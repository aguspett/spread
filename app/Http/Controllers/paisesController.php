<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pais;
use App\Http\Requests\paisesRquest;

class paisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $paises = Pais::all();

        return view('paises.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Pais $pais)
    {

        return view('paises.create',compact('pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(paisesRquest $request)
    {
        Pais::create($request->all());
        flash()->overlay('El país ha sido agragado','Exito');
        return redirect ('paises');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Paises $pais
     * @return Response
     */
    public function show(Pais $pais)
    {

       $provincias = $pais->provincias->all();

        return view('paises.indexCountry', compact('provincias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Paises $pais
     *
     * @return Response
     * @internal param int Paises $pais
     */
    public function edit(Pais $pais)
    {
        return view('paises.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  Paises $pais
     * @return Response
     */
    public function update(paisesRquest $request, Pais $pais)
    {
        $pais->update($request->all());
        return redirect()->action('paisesController@show', $pais->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Paises $pais
     * @return Response
     */
    public function destroy(Pais $pais)
    {
        $pais->delete();
        return redirect('paises');
    }
}
