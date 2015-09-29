<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

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
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function stream()
    {
        $followedIds = $this->followed()->get()->lists('id')->toArray();
        return Article::whereIn('user_id', $followedIds);
    }

    /**
     * A user can have many articles
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function isATeamManager()
    {
        return true;// middleware show text see routes
    }

    public function following()
    {
        return $this->belongsToMany('App\User', 'followers', 'user_id', 'followed_user_id');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'followers', 'followed_user_id', 'user_id')->withTimestamps();
    }

    public function followed()
    {
        return $this->belongsToMany('App\User', 'followers', 'user_id', 'followed_user_id')->withTimestamps();
    }
}
