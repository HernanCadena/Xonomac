<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contabilidad_Trabajadores extends Model
{
    //Indicar la tabla a operar
    protected $table = 'contabilidad-trabajador';

    //un metodo publico que me permita establecer la relacion de uno a muchos
    public function trabajadores(){
        return $this ->belongTo('App\Trabajadores','id_trabajador');
    }

}
