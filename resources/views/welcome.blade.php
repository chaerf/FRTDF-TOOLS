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