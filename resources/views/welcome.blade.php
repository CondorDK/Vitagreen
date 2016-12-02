@extends('layouts.app')

@section('content')
<section class="flexslider-container container">
    <div class="row">
      <div class="span12">
        <div class="flexslider" id="flex1">
          <div class="flex-viewport" style="overflow: hidden; position: relative; height: 0px;"><ul class="slides" style="width: 1000%; transition-duration: 1s; transform: translate3d(-2276px, 0px, 0px);">
            <li class="clone" style="width: 1138px; float: left; display: block;">
              <img src="images/slides1.png" alt="img">

                    </li>
                    <li class="clone" style="width: 1138px; float: left; display: block;">
                      <img src="images/slides2.png" alt="img">

                    </li>
                    <li style="width: 1138px; float: left; display: block;" class="flex-active-slide">
                      <img src="images/slides3.png" alt="img">

                    </li>
                    <li style="width: 1138px; float: left; display: block;" class="">
                      <img src="images/slides4.png" alt="img">

                    </li>
                  </ul>
                </div>
            </div>
         </div> <!-- end span12 -->
      </div> <!-- end row -->
    </section> <!-- end flexslider-container container -->




    <!-- ============================  Main Tagline Start ============================ -->
    <section class="main-tagline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1 class="title center">¡HOLA, Somos VitaGreen!</h1>
            <h6 class="subtitle center">¡Pasa y conocé nuestros servicios. Participa en nuestra comunidad!</h6>
          </div> <!-- end span12 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end main-tagline -->
    <!-- ============================  Main Tagline Ends ============================ -->

    <!-- ============================  Title Separator Starts ============================ -->

    <section class="title-separator">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5 class="title center"><span>Algunos reciclables</span></h5>
          </div> <!-- end span12 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end title-separator -->

    <!-- ============================  Title Separator Ends ============================ -->


    <!-- ============================  Features Start ============================ -->

    <section class="features-container">
      <div class="container">
        <div class="row">
          <ul class="unstyled feature-list">
            <li class="feature-items">
              <div class="feature center rocket">
                <img src="images/rocket.png" alt="rocket">

                <div class="feature-content">
                  <h5 class="title"><span>Recicla Metal</span></h5>
                  <p class="content">Su reciclaje y reutlización son indispensables para evitar seguir extrayendo estos metales. El aluminio, por ejemplo, puede reciclarse infinitas veces y nunca pierde su calidad. </p>
                </div> <!-- end feature-content -->
              </div> <!-- end feature -->
            </li>
            <li class="feature-items v2">
              <img src="images/line-separator.png" alt="img">
            </li>
            <li class="feature-items">
              <div class="feature center camera">
                <img src="images/camera.png" alt="rocket">

                <div class="feature-content">
                  <h5 class="title"><span>Recicla Papel</span></h5>
                  <p class="content">Cada tonelada de papel reciclado equivale a no talar aproximadamente 20 árboles. Esos 20 árboles salvados absorben un total de 110 kilos de dióxido de carbono por año. </p>
                </div> <!-- end feature-content -->
              </div> <!-- end feature -->
            </li>
            <li class="feature-items v2">
              <img src="images/line-separator.png" alt="img">
            </li>
            <li class="feature-items">
              <div class="feature center graduate">
                <img src="images/graduate.png" alt="rocket">

                <div class="feature-content">
                  <h5 class="title"><span>Reclcilar Plastico</span></h5>
                  <p class="content">El plástico desechado que va a ríos, lagunas y océanos, mata alrededor de 1 millón de animales por año. Una botella de plástico puede tardar hasta 1000 años de biodegradarse.</p>
                </div> <!-- end feature-content -->
              </div> <!-- end feature -->
            </li>
            <li class="feature-items v2">
              <img src="images/line-separator.png" alt="img">
            </li>
            <li class="feature-items">
              <div class="feature center settings">
                <img src="images/settings.png" alt="rocket">

                <div class="feature-content">
                  <h5 class="title"><span>Reciclar Vidrio</span></h5>
                  <p class="content">El vidrio es 100% reciclable y puede ser reciclado ilimitadas veces. Este proceso consume sólo el 25% de la energía necesaria para hacer vidrio nuevo. </p>
                </div> <!-- end feature-content -->
              </div> <!-- end feature -->
            </li>
          </ul>
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end features-container -->

    <!-- ============================  Features Ends ============================ -->


     <!-- ============================  Title Separator Starts ============================ -->

{{--      <section class="title-separator">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5 class="title center"><span>Ultimos Posts</span></h5>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- ============================  Title Separator Ends ============================ -->


    <!-- ============================  Recent Posts Start ============================ -->


@endsection
