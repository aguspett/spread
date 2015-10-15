<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 15/10/15
 * Time: 14:24
 */

namespace app\Http\Composers;



use App\Entities\Section;
use Illuminate\Support\Facades\Request;


class menuComposer
{
    public function __construct(Section $section)
    {
        $this->section = $section;
        $this->setRouteName();
    }

    public function compose($view)
    {
       if ($this->routeIsSection()){
           dump($this->routeName);
       }
        else {

        }
    }

    public function setRouteName()
    {

   $this->routeName = Request::route()->getName();
    }

    public function routeIsSection()
    {
       return count($this->seachSection())? true:false ;

    }

    /**
     * @return mixed
     */
    public function seachSection()
    {
        return $this->section->where('instruction', '=', $this->routeName)->first();
    }
}