<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //Indicar la tabla a operar
    protected $table = 'usuario';

    public function trabajadores (){
        return $this ->hasMany('App\Trabajadores');
    }

    public function insumo (){
        return $this ->hasMany('App\Insumos');
    }

    public function produccion (){
        return $this ->hasMany('App\Produccion');
    }
}
