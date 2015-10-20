<?php

namespace App\Entities;


use App\Traits\UploadImages;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    const UPLOADS_USERIMAGES = 'uploads/userimages/';
    const DEFAUL_USERIMAGES = 'uploads/userimages/user.jpg';

    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes, UploadImages;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];


    // ------ accessors
    public function getNameAttribute(
        $value
    ) {
        return ucwords($value);
    }

    // -----mutators
    public function setNameAttribute(
        $value
    ) {
        return ucwords($value);
    }

    //----relationships
    public function mainMenu(
    )
    {
        return $this->hasMany('App\Entities\Access')->where('parent_id',
            '=',
            null);
    }

    public function hasAcess(
        $parent_id

    ) {
        return $this->hasMany('App\Entities\Access')->where('parent_id',
            '=',
            $parent_id);
    }

}
