<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//indicar el directorio donde se encuentran los modelos
use App\Usuario;
use App\Insumos;
use App\Produccion;
use App\Trabajadores;
use App\Contabilidad_Trabajadores;
use App\Contabilidad_Insumo;
use App\Contabilidad_Produccion;



class ControlGeneral extends Controller
{


    public function usuario(){

?>
            <!DOCTYPE html>
            <html>
            <head>
                <title></title>
            </head>
            <body>
                <h1 align="center">LISTADO DE USUARIOS</h1>
                <table width="70%" border="1px" align="center">

                    <tr align="center">
                        <td>Id</td>
                        <td>CC_Usuario</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td>Celular</td>
                        <td>Direccion</td>
                        <td>Ciudad</td>
                    </tr>
                    <?php
                        //echo "Hola soy un controlador";
                        $usu = Usuario::all();
                        //var_dump($usu);
                        foreach($usu as $usuar){
                    ?>


                    <tr align="center">
                        <td><?php echo $usuar->id_Usuario;?></td>
                        <td><?php echo $usuar->cc_Usuario;?></td>
                        <td><?php echo $usuar->nombreUsuario;?></td>
                        <td><?php echo $usuar->apellidoUsuario;?></td>
                        <td><?php echo $usuar->email;?></td>
                        <td><?php echo $usuar->celular;?></td>
                        <td><?php echo $usuar->direccion;?></td>
                        <td><?php echo $usuar->ciudad;?></td>
                    </tr>

                </table>
            </body>
            </html>
<?php
        }
    }

    //Trabajadores
    public function trabajadores(){

        ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <h1 align="center">LISTADO DE USUARIOS</h1>
                        <table width="70%" border="1px" align="center">

                            <tr align="center">
                                <td>Id</td>
                                <td>CC_Trabajador</td>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Email</td>
                                <td>Celular</td>
                                <td>Direccion</td>
                                <td>Ciudad</td>
                                <td>Estado</td>
                                <td>Id_usu</td>
                            </tr>
                            <?php
                                //echo "Hola soy un controlador";
                                $tra = Trabajadores::all();
                                //var_dump($usu);
                                foreach($tra as $Trabaj){
                            ?>


                            <tr align="center">
                                <td><?php echo $Trabaj->id_Trabajador;?></td>
                                <td><?php echo $Trabaj->cc_Trabajador;?></td>
                                <td><?php echo $Trabaj->nombreTrabajador;?></td>
                                <td><?php echo $Trabaj->apellidoTrabajador;?></td>
                                <td><?php echo $Trabaj->email;?></td>
                                <td><?php echo $Trabaj->celular;?></td>
                                <td><?php echo $Trabaj->direccion;?></td>
                                <td><?php echo $Trabaj->ciudad;?></td>
                                <td><?php echo $Trabaj->estado;?></td>
                                <td><?php echo $Trabaj->id_usu;?></td>
                            </tr>

                        </table>
                    </body>
                    </html>
        <?php
                }
            }

    //Insumo
    public function insumo(){

?>
            <!DOCTYPE html>
            <html>
            <head>
                <title></title>
            </head>
            <body>
                <h1 align="center">LISTADO DE INSUMOS</h1>
                <table width="70%" border="1px" align="center">

                    <tr align="center">
                        <td>cogInsumo</td>
                        <td>id_Usu</td>
                        <td>Nombre</td>
                        <td>tipo</td>
                        <td>descripcion</td>
                        <td>fechaIngreso</td>
                        <td>fechaCaducidad</td>
                        <td>Valor</td>
                    </tr>
                    <?php
                    $ins = Insumos::all();


                    foreach($ins as $Insum){
                    ?>
                    <tr align="center">
                        <td><?php echo $Insum->cogInsumo;?></td>
                        <td><?php echo $Insum->usu_id;?></td>
                        <td><?php echo $Insum->nombreInsumo;?></td>
                        <td><?php echo $Insum->tipoInsumo;?></td>
                        <td><?php echo $Insum->descripcion;?></td>
                        <td><?php echo $Insum->fechaINgreso;?></td>
                        <td><?php echo $Insum->fechaCaducidad;?></td>
                        <td><?php echo $Insum->valor;?></td>
                    </tr>
                </table>
            </body>
            </html>
<?php
        }

    }

    //Produccion
    public function produccion(){

        ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <h1 align="center">LISTADO DE PRODUCCION</h1>
                        <table width="70%" border="1px" align="center">

                            <tr align="center">
                                <td>cogProducto</td>
                                <td>id_Usu</td>
                                <td>Nombre</td>
                                <td>Descripcion</td>
                                <td>Valor</td>

                            </tr>
                            <?php
                            $pro = produccion::all();


                            foreach($pro as $produc){
                            ?>
                            <tr align="center">
                                <td><?php echo $produc->cogProducto;?></td>
                                <td><?php echo $produc->usu_id;?></td>
                                <td><?php echo $produc->nombreProducto;?></td>
                                <td><?php echo $produc->descripcion;?></td>
                                <td><?php echo $produc->valor;?></td>
                            </tr>
                        </table>
                    </body>
                    </html>
        <?php
                            }
    }

    //Contabilidad Trabajadores
    public function contabilidadTrabajadores(){

        ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <h3 align="center">LISTADO DE CONTABILIDAD DE TRABAJADORES</h3>
                        <table width="70%" border="1px" align="center">

                            <tr align="center">
                                <td>CogContaTrabajador</td>
                                <td>id_Trabajador</td>
                                <td>fecha_Inicio</td>
                                <td>Fecha_Pago</td>
                                <td>Pago</td>
                                <td>Total</td>
                            </tr>
                            <?php
                            $cTra = Contabilidad_Trabajadores::all();


                            foreach($cTra as $conTra){
                            ?>
                            <tr align="center">
                                <td><?php echo $conTra->cogContTrabajador ;?></td>
                                <td><?php echo $conTra->id_trabajador ;?></td>
                                <td><?php echo $conTra->fechaInicio;?></td>
                                <td><?php echo $conTra->fechaPago;?></td>
                                <td><?php echo $conTra->pago;?></td>
                                <td><?php echo $conTra->total;?></td>
                            </tr>
                        </table>
                    </body>
                    </html>
        <?php
                            }
    }

    //Contabilidad Insumo
    public function contabilidadInsumo(){

        ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <h2 align="center">LISTADO DE CONTABILIDAD INSUMOS</h2>
                        <table width="70%" border="1px" align="center">

                            <tr align="center">
                                <td>cogContInsumo</td>
                                <td>CogInsumo</td>
                                <td>Valor</td>
                                <td>Cantidad</td>
                                <td>Total</td>
                            <?php
                            $cIns = contabilidad_Insumo::all();


                            foreach($cIns as $contInsu){
                            ?>
                            <tr align="center">
                                <td><?php echo $contInsu->cogInsuConta;?></td>
                                <td><?php echo $contInsu->cogInsumo ;?></td>
                                <td><?php echo $contInsu->valor;?></td>
                                <td><?php echo $contInsu->cantidad;?></td>
                                <td><?php echo $contInsu->total;?></td>
                            </tr>
                        </table>
                    </body>
                    </html>
        <?php
                            }
    }

    //Contabilidad Produccion
    public function contabilidadProduccion(){

        ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <h3 align="center">LISTADO DE CONTABILIDAD PRODUCCION</h3>
                        <table width="70%" border="1px" align="center">

                            <tr align="center">
                                <td>cogContProduccion</td>
                                <td>cogProduccion</td>
                                <td>cantidad</td>
                                <td>Valor</td>
                                <td>Total</td>
                            <?php
                            $cPro = Contabilidad_Produccion::all();


                            foreach($cPro as $ContProc){
                            ?>
                            <tr align="center">
                                <td><?php echo $ContProc->cogContProduccion ;?></td>
                                <td><?php echo $ContProc->cogProducto ;?></td>
                                <td><?php echo $ContProc->cantidad;?></td>
                                <td><?php echo $ContProc->valor;?></td>
                                <td><?php echo $ContProc->total;?></td>
                            </tr>
                        </table>
                    </body>
                    </html>
        <?php
                            }
    }
}

