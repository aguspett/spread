<?php namespace App\Http\Controllers;

use App\Contracts\PaisesRepositoryInterface;
use App\Contracts\ProvinciasRepositoryInterface;
use App\Entities\Pais;
use App\Entities\Provincia;
use App\Http\Requests;
use App\Http\Requests\provinciasRequest;
use App\Http\Requests\searchProvinciasRequest;
use App\Http\Requests\showProvinciasRequest;
use Illuminate\Http\Request;

class provinciasController extends Controller
{
    public function __construct(
        PaisesRepositoryInterface $pais,
        ProvinciasRepositoryInterface $porvincia
    ) {
        $this->pais = $pais;
        $this->provincia = $porvincia;
    }

    public function search(
        Request $request
    ) {
        if (!($request->isMethod("GET"))){
            return response()->redirectToAction('provinciasController@index', $request->input('paises'));
        }
        return view('provincias.search');
}
    public function index(
        $paisId
    ) {
        $provincias = $this->provincia->getAll($paisId)->paginate(15);
        return view('provincias.index',
            compact('provincias'));
    }


    /**
     * Muestra provincias para un pais
     *
     * @param showProvinciasRequest $request
     * @return vista de provincias de un pais
     */
    public function show(
        $id
    ) {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Pais $pais
     * @param Provincia $provincia
     * @return Response
     */
    public function create(
       $paisId
    ) {
        return view('provincias.create',
            compact('paisId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(
        $paisId,
        provinciasRequest $request
    ) {

      $this->provincia->create('paises', $request);
        return response()->redirectToAction('provinciasController@index', $paisId);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(
        $paisId,
        $provinciaId
    ) {
        $provincia = $this->provincia->getProvincia($provinciaId);
        return view('provincias.edit',
            compact('provincia',
                'paisId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(
        $paisId,
        $provinciaId,
        provinciasRequest $request
    ) {
        $provincia = $this->provincia->updateProvincia($provinciaId,
            $request);
        return redirect(action('provinciasController@index',
            ["paisId" => $paisId]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(
        $id
    ) {

    }

    /**
     * devuelve listas para llenar los selects
     * @param $provinciaId
     * @return array
     *
     */
    private function getSelectlistsLists(
        $provinciaId
    ) {

        $provincias_list = $this->provincia->List($provinciaId);

        return array($provincias_list);
    }


}
