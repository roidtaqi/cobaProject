<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'no_hp', 'alamat','file','status_verified',
    ];

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

    public function roles(){
        return $this -> belongsToMany('App\Role');
    }

    public function hasRole($role){

        if($this->roles()->where('name',$role)->first()){
        
            return true;
        }

        return false;
    }

    public function pesanan()
    {
        return $this->hasMany('App\Pesanan', 'user_id', 'id');
    }

    public function pesanan_detail()
    {
    	return $this->hasMany('App\PesananDetail', 'user_id', 'id');
    }

    public function getRIdAttribute($user) {
        return $user;
    }
}
