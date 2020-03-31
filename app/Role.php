<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillables =[
        'name',

    ];

    public  function role(){
        return $this->belongsTo('App\Role');
    }
    public  function photo(){
        return $this->belongsTo('App\Role');
    }
}


