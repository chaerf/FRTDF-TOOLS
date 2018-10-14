<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="Herramientas de soporte a la administración para UTN-FRTDF" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Facundo Chaer - facuchaer@gmail.com">
    
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{URL::asset('/css/theme.css')}}" />

    </head>
    <body>
        <div id="app"></div>
        <!--scripts loaded here
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="{{URL::asset('/js/theme.js')}}"></script>
        <script src="{{URL::asset('/build/UOM_main.js')}}"></script>
        

    </body>
</html>