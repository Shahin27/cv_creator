<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cv(){
        return $this->hasOne('App\Models\Cv','user_id');
    }

    public function socials(){
        return $this->hasMany('App\Models\Social','user_id');
    }

    public function experiences(){
        return $this->hasMany('App\Models\Experience','user_id');
    }
    public function educations(){
        return $this->hasMany('App\Models\Education','user_id');
    }
    public function skills(){
        return $this->hasMany('App\Models\Skill','user_id');
    }

}
