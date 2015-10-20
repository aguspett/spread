<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{


    public function subsections(
    )
    {
        return $this->hasMany('App\Entities\Section',
            'parent_id');

    }

    public function parent(
    )
    {
        return $this->belongsTo('App\Entities\section',
            'parent_id');
    }

    public function option(
    )
    {
        return $this->hasMany('App\Entities\Option');
    }

    public function users(
    )
    {
        return $this->belongsToMany('App\Entities\User',
            'userAcessSections');
    }
}
