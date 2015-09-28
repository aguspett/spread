<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaisesRequest;
use App\Http\Requests\PaisesShowRequest;
use App\Repositories\Paises\PaisesRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pais;

class paisesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Altas bajs Y moificaciones de paises
    |--------------------------------------------------------------------------
    |
    | eeste controlador maneja las altas bajas y modificacionde los paises
    |
    */
    public function __construct(PaisesRepositoryInterface $pais)
    {
        $this->pais = $pais;
    }

    /**
     * Display a listing of the resource.
     *
     * @return vista del index de paises
     */
    public function index()
    {
        $paises_list = $this->pais->getPaisesListWithNull();

        return view('paises.index', compact('paises_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $paises_list = $this->pais;
        return view('paises.create',compact('pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PaisesRequest  $request
     * @return Response
     */
    public function store(PaisesRequest $request)
    {
        $this->pais->create($request);
        //flash()->overlay('El país ha sido agragado','Exito');
        return redirect ('paises');
    }

    /**
     * Display the specified resource.
     *
     * @param PaisesShowRequest $request
     * @return Response
     * @internal param int $id
     */
    public function show(PaisesShowRequest $request  )
    {
       $pais = $this->pais->getProvincias($request->input('paises_list'));
       $paises_list =  $this->pais->getPaisesList();
        return view('paises.indexCountry', compact('pais','paises_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id int
     *
     * @return Response
     * @internal param int Paises $pais
     */
    public function edit($id)
    {
        $pais = $this->pais->getCountry($id);
        return view('paises.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PaisesRequest|Request $request
     * @return Response
     * @internal param Paises $int $pais
     */
    public function update($id,PaisesRequest $request )
    {

        $pais = $this->pais->updatePais($id, $request);

        return redirect()->action('paisesController@index', $pais->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Paises $pais
     * @return Response
     */
    public function destroy($id)
    {
        $this->pais->deletePais($id);
        return redirect('paises');
    }
}
