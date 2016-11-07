<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

        'category_id',
        'user_id',
        'pic_id',
        'title',
        'body'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pic(){
        return $this->belongsTo('App\Pic');
    }

    public function category(){
        return $this->belongsTo('App\category');
    }




}
