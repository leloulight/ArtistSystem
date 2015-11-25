<!-- resources/views/auth/login.blade.php -->

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
              <a href="#" class="brand-logo center">Logo</a>
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
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class = 'btn green'>Login</button>
    </div>
</form>

</body>

</html>

