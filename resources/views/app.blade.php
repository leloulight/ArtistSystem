<html>
    <head>
    @section('head')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <?php echo HTML::style('css/materialize.css');?>
        <?php echo HTML::style('css/style.css');?>
    @show
    </head>
    <body>
        <nav class = 'grey darken-4'>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Logo</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li {{ Request::is('nosotros*') ? 'active' : '' }}> {!! link_to('/', 'Acerca De') !!}</li>
                <li {{ Request::is('art*') ? 'active' : '' }}> {!! link_to('/', 'Obras') !!}</li>
                <li {{ Request::is('contacto*') ? 'active' : '' }}> {!! link_to('/', 'Contacto') !!}</li>
                <li> {!! link_to('/', 'Logout') !!} </li>
              </ul>
            </div>
        </nav>
        <div class="container">
        @if (Session::has('message'))
            <div class="flash alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class='flash alert-danger'>
            @foreach ( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif

        @yield('content')
        </div>

        @section('footer_scripts')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @show
        
    </body>

    
</html>