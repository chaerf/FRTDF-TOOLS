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
        {{-- head section --}}
        <head>
            @section('header')
            @show
        </head>
        {{-- nav section --}}
        <nav class="navbar navbar-expand-md navbar-dark">
            @section('navbar')
            @show
        </nav>
        {{-- content section --}}
        <main class="container-fluid" id="main">
            <div class="row">
                {{-- left bar --}}
                <div class="col-md-3 col-lg-2" id="sidebar" role="navigation">
                    @section('left-bar')
                    @show
                </div>
                {{-- main content --}}
                <div class="col main pt-5 mt-3">
                    @section('content')
                    section content
                </div>
                {{-- right bar section --}}
                <div class="col-md-3 col-lg-2">
                    @section('right-bar')
                    @show
                </div>
            </div>
        </main>
        {{-- footer section --}}
        <footer class="container-fluid">
            @section('footer')
            section footer
        </footer>

        <div>
            @section('messages')
        </div>

        @section('scripts')
        <!--scripts loaded here-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('/js/theme.js')}}"></script>

    </body>
</html>