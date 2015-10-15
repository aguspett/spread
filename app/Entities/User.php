<?php

namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable,Authorizable, CanResetPassword, SoftDeletes;


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
    protected $fillable = ['name', 'email', 'password', 'photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getNameAtribute($value)
    {
        return $this->attributes['name'] = ucfirst($value);
    }
    /**
     * Upload user image
     * @param Request $data
     * @return null|string
     */
    public static function uploadUserImage($data)
    {
        $complete_route = 'uploads/userimages/';
        if ($data->hasFile('photo')){
            $image_name = time()."-".$data->file('photo')->getClientOriginalName();
            $data->file('photo')->move('uploads/userimages', $image_name);
            $complete_route = $complete_route.$image_name;
        }
        else{
            $complete_route = $complete_route.'user.jpg';
        }
        return $complete_route;
    }
    public function canAccess()
    {
        return $this->belongsToMany('App\Entities\Section', 'userAcessSections');
    }
    public function treeAccess()
    {
        return $this->canAccess()->where('parent_id','=',null)->where('user_id','=',$this->id)->with('subsections');
    }
}
