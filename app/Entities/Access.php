<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
//    protected $table = 'userAcessSections';

    public function section(
    )
    {
        return $this->belongsTo('App\Entities\Section',
            'section_id',
            'id');
    }

    protected function permission(
    )
    {
        return $this->hasMany('App\Entities\Permission',
            'access_id',
            'id');
    }

    protected function subAccess(
    )
    {
        return $this->hasMany('App\Entities\Access',
            'parent_id',
            'id');
    }
}
