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
                height: 60vh;
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
                font-size: 50px;
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
            
                <div class="top-right links">
                  
                        <a href="/welcome">Home</a>
                 
                </div>
            

            <div class="content">
                <div class="links">
                    <a href="/Ingresar">INICIAR</a>
                    <a href="/Registrar">REGISTRAR</a>
                    <a href="/Informacion">INFORMACIÓN</a>
                    <a href="/Sugerencias">SUGERENCIAS</a>

                </div>

                <br>
                <div class="title m-b-md">
                    CONTACTENOS
                </div>

                <div align="center">
                    Programador #1:Hernan Javier Cadena Chavrro <br>
                    Email: hernancadena_20182@corhuila.edi.co <br>
                    Telefono: 3138169402 
                    <br>
                    <br>
                    Programador #2: Sergion
                </div>
                <br>
                <br>
                

                <br>
                <br>
            </div>
        </div>
    </body>
</html>