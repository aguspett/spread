<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 15/10/15
 * Time: 14:23
 */

namespace app\Http\Composers;

use Illuminate\Support\Facades\Auth;

class sidebarComposer
{
    public function compose(
        $view
    ) {
        if (Auth::check()) {
            $view->with(['items' => Auth::user()->mainMenu]);
        }
    }
}