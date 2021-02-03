<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!--<link rel="shortcut icon" href="../../public/favicon.ico" sizes="16x16" type="image/ico">-->
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('favicon.png') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

        <!-- Estilos -->
        <link rel="stylesheet" href="{{ asset('./css/indexEstilos.css') }}">
    </head>

    <body class="antialiased">
        <!-- Lista de ejercicios -->
    <div class="contenedor">

        <h2>Andrei Website</h2>
            <a class="hoverable" href="{{ route('index') }}">Welcome</a>
            <a class="hoverable" href="{{ route('welcome') }}">Welcome 2</a>
        </div>





        <!-- Cursor -->

        <div class="cursor">
        <div class="circulo circulo_grande">
            <svg height="30" width="30">
            <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
            </svg>
        </div>



        <div class="circulo circulo_pequeno">
            <svg height="10" width="10">
            <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
            </svg>
        </div>
    </div>

    <script src="{{asset('js/main.js')}}"></script>
         
    </body>
</html>
