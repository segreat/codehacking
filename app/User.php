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

    public function pic(){
        return $this->belongsTo('App\Pic');
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

   /* public function setpasswordAttribute($password){
        if(!empty($password)){
            $this->attribute['password'] = bcrypt('password');
        }
    }*/

    public function IsAdmin(){
        if($this->role->name =='administrator' && $this->is_active == 1){
            return true;
        }
        return false;
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

}
