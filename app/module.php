<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{

    public function submodules()
    {
        return $this->hasMany('App\module', 'parent');
   }

    public function padre()
    {
        return $this->belongsTo('App\module');
    }

    public function options()
    {
        return $this->hasMany('App\option');
    }
}
