<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

                background-color: #D3593E;
                color: #F6F6F6;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #F6F6F6;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            


            <div class="content">

                <div class="links">
                    <a href="/Registrar">REGISTRAR</a>
                    <a href="/Ingresar">INICIAR</a>
                    <a href="/Informacion">INFORMACIÓN</a>
                    <a href="/Contactenos">CONTACTENOS</a>
                    <a href="/Sugerencias">SUGERENCIAS</a>

                </div>
                <br>
                <br>
                <div class="title m-b-md">
                    BIENVENIDOS A XONOMAC
                </div>

                <div align="center">
                    Xonomac cambiara la forma de como registrar y llevar el registro y control de inventario de los
                    <br>
                    materiales fundamentales para la producción del café, de una manera digital para reduccir los 
                    <br>
                    inconvenientes que se presentan al momento de verificar las herramientas disponibles. 
                </div>

                
            </div>
        </div>
    </body>
</html>
