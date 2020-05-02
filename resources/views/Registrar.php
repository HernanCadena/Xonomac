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
                    <a href="/Informacion">INFORMACIÓN</a>
                    <a href="Contactenos">CONTACTENOS</a>
                    <a href="/Sugerencias">SUGERENCIAS</a>

                </div>

                <br>
                <div class="title m-b-md">
                    REGISTRO
                </div>

                <div align="center">
                    <form>
                        <ul>
                            
                                <label for="nombre">Nombre:   </label>
                                <input type="text" id="nombre"name="Usuer_name">
                            
                        </ul>
                        <ul>
                            
                                <label for="email">Correo:   </label>
                                <input type="text" id="email"name="User_mail">
                            
                        </ul>
                        <ul>
                           
                                <label for="contrasena">Contraseña: </label>
                                <input type="Password" id="contrasena"name="Password">
                           
                        </ul>
                    </form>
                </div>
                <br>
                <br>
                <div>
                    <button>Registrar</button>
                    <button>Cancelar</button>
                </div>

                <br>
                <br>
            </div>
        </div>
    </body>
</html>
