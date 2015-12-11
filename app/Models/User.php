<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, SoftDeletes;
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
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'password', 'avatar', 'verified','emailtoken','city','ismale','country','alternate_email','private','slug','blocked','newsletter','ip_register'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function petitions()
    {
        return $this->hasMany('App\Models\Petition');
    }

    public function likes()
    {
        return $this->belongsToMany('App\Models\Comment','user_like_comment')->withTimestamps();
    }

    public function support(){
        return $this->belongsToMany('App\Models\Petition','user_support_petition')->withTimestamps();
    }

}
