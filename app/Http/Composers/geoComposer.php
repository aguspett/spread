<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 13/10/15
 * Time: 15:35
 */

namespace app\Http\Composers;


use App\Contracts\PaisesRepositoryInterface;
use App\Contracts\ProvinciasRepositoryInterface;

class geoComposer
{
    public function __construct(
        PaisesRepositoryInterface $pais,
        ProvinciasRepositoryInterface $provincia
    ) {
        $this->pais = $pais;
        $this->provincia = $provincia;
    }

    public function PaisSelect(
        $view
    ) {
        $view->with('paises',
            $this->pais->getPaisesListWithNull());
    }
}