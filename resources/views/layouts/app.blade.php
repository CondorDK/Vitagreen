<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vitagreen</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="fanicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="{{{ asset('/css/font-awesome.min.css') }}}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Stilos de bootstrap -->
    <link href="{{{ asset('/css/bootstrap.min.css') }}}" rel="stylesheet">
    <link href="{{{ asset('/css/bootstrap-responsive.min.css') }}}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{{ asset('/css/styles.css') }}}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<section class="main-nav">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-inner">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="images/vita.png" alt="logo" width="110" height="110">
                </a></ul>
                <!-- <Menus y mierdas> -->
                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <li><span class="list-circle"></span> <a href="{{ url('/login') }}">Ingresar</a></li>
                        <li><span class="list-circle"></span> <a href="{{ url('/register') }}">Registrarse</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><span class="list-circle"></span><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Perfil</a></li>
                                <li><span class="list-circle"></span><a href="{{ url('/como') }}"><i class="fa fa-btn fa-cube"></i>Materiales</a></li>
                                <li><span class="list-circle"></span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- End Navbar Collapse -->
          <!--fin de navbar Inner -->
        </div>
      </nav>
    </section>



    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/libraries/plugins.js"></script>
  <script src="js/main.js"></script>

<section class="subfooter">
  <div class="container">
    <div class="row">
      <center>
        <div class="span12">
          <p class="rights">Copyright © 2016 Vitagreen Team. Todos los derechos reservados.</p>
        </div>
      </center>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end subfooter -->
</html>
