<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name','cat_desc','cat_image'];


    public function user(){
        return $this->belongsToMany('App\User','posts');
    }


    public function posts(){

        return $this->hasMany('App\Post');

    }



}


