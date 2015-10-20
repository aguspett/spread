<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 15/10/15
 * Time: 14:24
 */

namespace app\Http\Composers;


use App\Entities\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class menuComposer
{
    public function __construct(
        Section $section
    ) {
        $this->section = $section;
        $this->setRouteName();
    }

    public function compose(
        $view
    ) {
        if ($this->routeIsSection()) {

            $view->with(['menusection' => Auth::user()]);

        } else {
            return $this->routeName;
        }
    }

    public function setRouteName(
    )
    {

        $action = Request::route()->getAction();
        $controller = str_replace($action["namespace"] . '\\',
            '',
            $action['controller']);
        $this->routeName = $controller;
    }

    public function routeIsSection(
    )
    {
        return count($this->seachSection()) ? true : false;

    }

    /**
     * @return mixed
     */
    public function seachSection(
    )
    {
        return $this->section->where('instruction',
            '=',
            $this->routeName)->first();
    }
}