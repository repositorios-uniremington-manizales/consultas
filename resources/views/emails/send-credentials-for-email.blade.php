<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('styles/emailCredentialStyles.css') }}">
</head>
<body>
    <div class="back-background">
        <div class="front-background">            
            <img class="center-element space-20" src="{{ asset('img/UniremingtonVerticalLogo.png') }}" alt="">            
            <p><strong>!Hola {{ $credentials->name }}!</strong>, recibe un saludo de parte de Uniremington Manizales.</p>

            <p class="space-60">A continuación encontrarás el usuario y contraseña para acceder a la Biblioteca Virtual Gustavo Vásquez Betancourt y al correo general de Uniremington</p>

            <p><strong>Usuario: </strong>{{ $credentials->medellinMail }}</p>

            <p class="space-60"><strong>Contraseña: </strong>{{ $credentials->medellinPassword }}</p>

            <p>Recuerda que a partir de la fecha tendrás acceso a dos correos electrónicos:<p>

            <p class="space-40">Correo institucional de Uniremington Manizales <strong>(@uniremingtonmanizales.edu.co)</strong> y el correo general de Uniremington <strong>(@miremington.edu.co)</strong></p>

            <p>Si su primer apellido contiene el caracter especial <strong>'ñ'</strong> utilícelo para el ingreso a la Biblioteca y al correo general<p>
                
            <p><strong>Ejemplo:</strong> Si su usuario es <strong><i>nombre.munoz.1234@miremington.edu.co</i></strong> ; el ingreso a la Biblioteca Virtual y correo general sería <strong><i>nombre.muñoz.1234@miremington.edu.co</strong></i><p>

            <p><strong>NOTA:</strong> Anexamos de igual forma los respectivos enlances para cada una de las Plataformas:</p>


            <p><span class="emoji-size">&#128073;</span> <a href="http://biblioteca.uniremington.edu.co/index.php/login" target="_blank">Biblioteca Virtual</a></p>

            <p class="space-60"><span class="emoji-size">&#128073;</span> <a href="https://tinyurl.com/y7pnn9vl" target="_blank">Correo General</a></p>
            
            <hr>

            <div class="center-tex">
                <p>Si presenta algún tipo de inconveniente, comuníquese con el área de Tecnologías de la Información y las Comunicaciones de la sede:<p>

                <p>Contacto:<p>                
                <p><strong class="mail-color">administradormoodle@uniremingtonmanizales.edu.co</strong></p>
                <p><strong class="mail-color">lidertic@uniremingtonmanizales.edu.co</strong></p>

                <p>Teléfono: 885 2121 Ext. 105</p>

                <p>Chat en lína directamente desde el portal de acceso a credenciales.</p>
            </div>

            <hr>
            
        </div>
    </div>
</body>
</html>