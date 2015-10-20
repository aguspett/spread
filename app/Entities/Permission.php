<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    public function option(
    )
    {
        return $this->belongsTo('App\Entities\Option',
            'option_id',
            'id');
    }
}
