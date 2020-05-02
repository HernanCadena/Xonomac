<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contabilidad_Produccion extends Model
{
    //Indicar la tabla a operar
    protected $table = 'contabilidad-produccion';

    //un metodo publico que me permita establecer la relacion de uno a muchos
    public function contabilidadProduccion(){
        return $this ->belongTo('App\Produccion','cogProducto');
    }

}
