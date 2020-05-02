<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajadores extends Model
{
    //Indicar la tabla a operar
    protected $table = 'trabajadores';

    //un metodo publico que me permita establecer la relacion de uno a muchos
    public function usuario(){
        return $this ->belongTo('App\Usuario','usu_id');
    }

    public function contabilidadTrabajador (){
        return $this ->hasMany('App\Contabilidad-Trabajadores');
    }

}
