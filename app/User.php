<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_active','role_id','pic_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    /*ACCESSOR*/
    public function getNameAttribute($value){
        /*return ucfirst($value);*/
        return strtoupper($value);
    }

    /*MUTATOR*/
    public function setNameAttribute($value){
        $this->attributes['name']= strtoupper($value);
    }

}
