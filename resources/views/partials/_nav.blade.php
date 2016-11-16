

    <!-- ============================  Dropdown Info Start ============================ -->

    <section class="dropdown-info">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="contact-info-widget pull-right">
              <a href="#" id="info-activator"><i class="icon-angle-down"></i></a>
              <ul class="unstyled inline">
                <li><i class="icon-phone icon-large"></i> <span class="info">+54- 3624-123456</span></li>
                <li><i class="icon-envelope-alt icon-large"></i> <span class="info">mipi@tuminex.com</span></li>
              </ul>
            </div> <!-- end contact-info-widget -->
          </div> <!-- end span12 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end dropdown-info -->

    <!-- ============================  Dropdown Info End ============================ -->

    <!-- ============================  Main Nav Start ============================ -->

    <section class="main-nav">
      <div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="{{ url('/') }}"><img src="images/logo.png" alt="logo"></a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
              <!-- .nav, .navbar-search, .navbar-form, etc -->

              <ul class="nav pull-right">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Caracteristicas <i class="icon-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><span class="list-circle"></span> <a href="{{ url('/materiales') }}">Materiales</a></li>
                    <li><span class="list-circle"></span> <a href="{{ url('/servicios') }}">Servicios</a></li>
                    <li><span class="list-circle"></span> <a href="{{ url('/acercade') }}">Acerca De</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>


                <!-- Authentication Links -->
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
                            <li><span class="list-circle"></span><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                @endif

              </ul> <!-- end nav -->
            </div> <!-- end nav-collapse -->
          </div> <!-- end navbar-inner -->
        </div> <!-- end navbar -->
      </div> <!-- end container -->
    </section> <!-- end main-nav -->
