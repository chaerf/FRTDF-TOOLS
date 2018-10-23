<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="Herramientas de soporte a la administración para UTN-FRTDF" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Facundo Chaer - facuchaer@gmail.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Inconsolata:300|Material+Icons' rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app"></div>
        <!--scripts loaded here-->
        <script src="{{URL::asset('/build/UON_main.js')}}"></script>
    </body>
</html>