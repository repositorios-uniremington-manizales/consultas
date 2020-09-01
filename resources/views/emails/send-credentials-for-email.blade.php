<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">    
    <style>
        body {
            margin:0;
            padding:0
        }

        .back-background {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            border: 1px solid transparent;
            margin: 2%;
            background-color: #eeeeee;
        }

        .front-background {
            border: 1px solid transparent;
            margin: 20px;
            background-color: #ffffff;
            padding: 20px;
            font-size: 16px;
        }

        .center-element {
            display: block;
            margin:auto;
            width: 40%;
        }

        .space-20 {
            margin-bottom: 20px;
        }

        .space-60 {
            margin-bottom: 40px;
        }

        .space-60 {
            margin-bottom: 60px;
        }

        .mail-color {
            color: #0071e4;
        }

        .emoji-size {
            font-size: 20px;
        }

        .center-tex {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="back-background">
        <div class="front-background">            
            <img class="center-element space-20" src="http://consultas.uniremingtonmanizales.edu.co/consultas/public/img/UniremingtonVerticalLogo.png" alt="">
            <p><strong>¡Hola {{ $credentials->name }}!</strong> recibe un saludo de parte de Uniremington Manizales.</p>

            <p class="space-60">A continuación encontrarás el usuario y contraseña para acceder a la Biblioteca Virtual Gustavo Vásquez Betancourt y al correo general de Uniremington.</p>

            <p><strong>Usuario: </strong>{{ $credentials->medellinMail }}</p>

            <p class="space-60"><strong>Contraseña: </strong>{{ $credentials->medellinPassword }}</p>

            <p>Recuerda que a partir de la fecha tendrás acceso a dos correos electrónicos:<p>

            <p class="space-40">Correo institucional de Uniremington Manizales <strong>(@uniremingtonmanizales.edu.co)</strong> y el correo general de Uniremington <strong>(@miremington.edu.co)</strong></p>

            <p><strong>NOTA:</strong> Enlaces de acceso a Plataformas:</p>


            <p><span class="emoji-size">&#128073;</span> <a href="http://biblioteca.uniremington.edu.co/index.php/login" target="_blank">Biblioteca Virtual</a></p>

            <p class="space-60"><span class="emoji-size">&#128073;</span> <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=4d8a4cc9-5272-417f-b6a9-2afb99e8231e&protectedtoken=true&nonce=636784127086789396.4a79cd8b-e477-43b8-9c13-6ec308ba1b10&state=DYtJEoAwCMCojs_BUmFYnlOqZ49-Xw7J5JIGAHuxFY1KYMpqLuMy8org0FOmxbo98REzFE7HWINRn8XkOUcOavUe_f1m_wE&sso_reload=true" target="_blank">Correo General</a></p>
            
            <hr>

            <div class="center-tex">
                <p>Si presenta algún tipo de inconveniente, comuníquese con el área de Tecnologías de la Información y las Comunicaciones de la sede.<p>

                <p><strong>Contacto:</strong><p>

                <p><span class="emoji-size">&#9993;</span>&nbsp;<strong class="mail-color">administradormoodle@uniremingtonmanizales.edu.co</strong></p>
                
                <p><span class="emoji-size">&#9993;</span>&nbsp;<strong class="mail-color">lidertic@uniremingtonmanizales.edu.co</strong></p>

                <p><span class="emoji-size">&#128222;</span>&nbsp;Teléfono: 885 2121 Ext. 113</p>

                <p><span class="emoji-size">&#128640;</span>&nbsp;Chat en lína directamente desde el portal de acceso a credenciales.</p>
            </div>

            <hr>
            
        </div>
    </div>
</body>
</html>