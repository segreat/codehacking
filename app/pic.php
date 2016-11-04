<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    //
    protected $uploads = '/images/';
    protected $fillable = ['path'];

    public function getpathattribute($pic)
    {
        return $this->uploads . $pic;
    }
}
