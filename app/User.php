<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsername()
    	{
    		return $this->username;
    	}

    public function comments()
    {
      return $this->hasMany(Comment::class, 'user_id');
    }

    public function post()
    {
      return $this->hasMany(Post::class, 'user_id');
    }

    public function followers()
    {
      return $this->belongsToMany(User::class,'user_user', 'follower_id','followee_id');
    }
}
