<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="Herramientas de soporte a la administración para UTN-FRTDF" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Facundo Chaer - facuchaer@gmail.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    </head>
    <body>
        <div id="app"></div>
        <!--scripts loaded here-->
        
        <script src="{{URL::asset('/build/UOM_main.js')}}"></script>
        

    </body>
</html>