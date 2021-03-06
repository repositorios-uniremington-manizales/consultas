<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Smartsupp Live Chat script -->
    <script src="{{ asset('scripts/smartsupp.js') }}" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <title>Plataforma de consultas institucionales</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('styles/ownStyles.css') }}">

</head>
<body>

        <!--
        **   
        **  NAVBAR
        **
        -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}"><img class ="uniremingtonLogo" src="{{asset ('img/UniremingtonHorizontalLogo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plataformas académicas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://virtual.uniremingtonmanizales.edu.co/moodle/login/index.php" target="_blank"></i>Moodle</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://site4.q10.com/login?ReturnUrl=%2F&aplentId=a2e25504-9d7b-4e4e-861a-5f015f373d8f" target="_blank">Sistema Académico</a>
                    </div>
                </li>
            </ul>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}"><button class="btn btn-outline-light my-2 my-sm-0">Inicio</button></a>
            @else
            <a href="{{ route('login') }}"><button class="btn btn-outline-light my-2 my-sm-0">Iniciar Sesion</button></a>
            @endauth
            @endif            
        </div>
    </nav>

    <!--
    **   
    **  HEADER QUE CONTIENE UN MENSAJE DE BIENVENIDA
    **
    -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4" style="font-size:35px;">Plataforma de consultas institucionales</h1>
            <hr class="my-4">
            <p class="lead">Contamos con los siguientes servicios para que te puedas conectar con la U de una manera ágil y eficiente.</p>
        </div>
    </div>
    <br>
    
    <!--
    **   
    **  BLOQUES DE IMÁGENES QUE OFRECEN LOS DIFERENTES SERVICIOS
    **
    -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <center>
                    <div>
                        <a href="{{ url('get-credentials') }}"><img class="zoom imageSize" src="{{ asset('img/credentials.svg')}}" alt=""></a>
                    </div>
                    <h3>Credenciales</h3>
                    <p>Adquiere el usuario y contraseña de la Biblioteca Virtual y el correo general de Uniremington</p>
                </center>
            </div>
            <div class="col-sm">
                <center>
                    <div>
                    <a href=""><img class="zoom imageSize" src="{{ asset('img/teacher.svg')}}" alt=""></a>
                    </div>
                    <h3>Seguimiento a docentes</h3>
                    <p>Consulta el estado de tu seguimiento como docente Uniremington</p>
                </center>
            </div>
            <div class="col-sm">
                <center>
                    <div>
                        <img class="imageSize" src="{{ asset('img/computer.svg')}}" alt="">
                    </div>
                    <h3>Próximos servicios...</h3>
                </center>
            </div>
        </div>
    </div>

    <!--
    **   
    **  FOOTER
    **
    -->
    
    <img class="campusLogo" src="{{ asset ('img/campusLogo.png')}}" alt="">

    <footer class="footer">
        <p style="color:#626262;"><a href="https://www.uniremington.edu.co/manizales/" target="_blank">Uniremington Manizales</a> es una Institución de Educación Superior sujeta a la inspección y vigilancia del Ministerio de Educación Nacional de Colombia.</p>        
        <p style="color:#626262;">Sede Plaza Bolívar: Calle 22 # 21-14 / PBX: 882 8373 - Sede Cable: Carrera 23C N° 64 - 53 / PBX: 885 2121</p>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>