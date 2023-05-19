<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>{{$title}}</h1>
        <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/6425320-design-piatto-trofeo-trofeo-vettore-isolato-su-sfondo-bianco-gratuito-vettoriale.jpg" alt="trofeo" width="200px">
        <a href="{{ route('home') }}">Torna alla Home</a>
    </body>
</html>
