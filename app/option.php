<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{

    public function module()
    {
        return $this->belongsTo('App\module');
    }
}
