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

    <link href="css/RegistroInsumo.css" rel="stylesheet">
        <title>RegistroInsumos</title>
        <link rel="shortcut icon" href="Img/Logo.png" class="logo">



    </head>
    <body background="Img/Fondo.jpg">
        <div class="flex-center position-ref full-height">

                <section class="form-registro">
                    <h4>Registro Insumos</h4>
                    <input class="control" type="int" name="codInsumo" id="codInsumo"  placeholder="Ingresar codigo">
                    <input class="control" type="text" name="nombre" id="nombre"  placeholder="Ingresar nombre Insumo">
                    <input class="control" type="text" name="tipo" id="tipo"  placeholder="Ingresar tipo insumo">
                    <input class="control" type="text" name="descripcion" id="descripcion"  placeholder="Ingresar descripcion">
                    <input class="control" type="date" name="fechaIngre" id="fechaIngre"  placeholder="Ingrese fecha de ingreso">
                    <input class="control" type="date" name="fechaCaducidad" id="fechaCaducidad"  placeholder="Ingrese fecha de caducidad">
                    <input class="control" type="int" name="valor" id="valor"  placeholder="Ingrese valor">
                    <input class="control" type="int" name="cantidad" id="cantidad"  placeholder="Ingrese cantidad">
                    <input class="control" type="int" name="total" id="total"  placeholder="Ingrese total">

                    <a href="/"><input class="botons" type="submit" value="Registrar"></a>
                    <a href="/welcome"><input class="botons" type="submit" value="Volver"></a>

                </section>




        </div>

    </body>
</html>
