<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contabilidad_Insumo extends Model
{
    //Indicar la tabla a operar
    protected $table = 'contabilidad-insumo';

    //un metodo publico que me permita establecer la relacion de uno a muchos
    public function trabajadores(){
        return $this ->belongTo('App\Insumo','cogInsumo');
    }

}
