<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    //Indicar la tabla a operar
    protected $table = 'insumo';

    //un metodo publico que me permita establecer la relacion de uno a muchos
    public function usuario(){
        return $this ->belongTo('App\Usuario','usu_id');
    }

    public function contabilidadInsumo (){
        return $this ->hasMany('App\Contabilidad-Insuno');
    }

}
