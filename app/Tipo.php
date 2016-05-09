<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    function usuarios(){
        return $this->hasMany('App\Usuario');
    }
}
