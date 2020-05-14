<!doctype html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="css/RegistroTrabajador.css" rel="stylesheet">
        <title>RegistroTrabajadores</title>
        <link rel="shortcut icon" href="Img/Logo.png" class="logo">



    </head>
    <body background="Img/Fondo.jpg">
        <div class="flex-center position-ref full-height">

                <section class="form-registro">
                    <h4>Registro Trabajadores</h4>
                    <input class="control" type="int" name="idTra" id="IdTra"  placeholder="Ingresar ID">
                    <input class="control" type="int" name="c.c" id="c.c."  placeholder="Ingresar C.C">
                    <input class="control" type="text" name="nombres" id="nombres"  placeholder="Ingresar nombre trabajador">
                    <input class="control" type="text" name="apellidos" id="apellidos"  placeholder="Ingresar apellidos trabajador">
                    <input class="control" type="email" name="correo" id="correo"  placeholder="Ingrese correo">
                    <input class="control" type="text" name="telefono" id="telefono"  placeholder="Ingrese telefono">
                    <input class="control" type="text" name="direccion" id="direccion"  placeholder="Ingrese dirección">
                    <input class="control" type="text" name="ciudad" id="ciudad"  placeholder="Ingrese ciudad">
                    <input class="control" type="int" name="pagoDia" id="pagoDia"  placeholder="Ingrese Pago día">
                    <input class="control" type="int" name="dias" id="dias"  placeholder="Ingrese dias trabajados">
                    <input class="control "type="text" name="totalpago" id="totalPago" placeholder="Total a pagar">
                    <select class="control" type="text" name="estado" id="estado"  placeholder="Ingrese estado">
                        <option>  </option>
                        <option>A</option>
                        <option>I</option>
                    </select>

                    <a href="/TablaTrabajador"><input class="botons" type="submit" value="Registrar"></a>
                    <a href="/welcome"><input class="botons" type="submit" value="Volver"></a>

                </section>


            </div>

        </div>

    </body>
</html>
