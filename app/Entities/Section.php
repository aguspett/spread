<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    public function options()
    {
        return $this->hasMany('App\Option','section_id');
    }
    public function subsections()
    {
        return $this-> hasMany('App\Section','parent_id');
    }
}
