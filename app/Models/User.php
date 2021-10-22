<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Overtrue\LaravelLike\Traits\Liker;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, Liker;

    public $timestamps = false; //set time to false

    protected $primaryKey = 'id';
    protected $table = 'users';

    public function roles(){
        return $this->belongsToMany('App\Models\Roles');
    }
     public function getAuthPassword(){
        return $this->password;
    }
    public function hasAnyRoles($roles){
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    public function hasRole($role){
        return null !== $this->roles()->whereIn('name', $role)->first();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'email_verified_at','password','remember_token','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
