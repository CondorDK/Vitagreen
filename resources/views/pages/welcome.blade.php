@extends('layouts.main')

@section('title', '| Home')

@section('stylesheets')

      {!! Html::style('css/style.css') !!}


@endsection

@section('content')


    <!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
</ol>
      <!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
    <img src="../images/slides1.png" alt="First slide">
            <!-- Static Header -->
            <div class="header-text hidden-xs">
                <div class="col-md-12 text-center">
                <h2><span>Bienvenido a Vitagreen</span></h2>
                    <br>
                <h3><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></h3>
                    <br>
              <div class="">
                <a class="btn btn-theme btn-sm btn-min-block" href="#">Hola</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Como</a>
          </div>
       </div>
   </div><!-- /header-text -->
</div>

          <div class="item">
            <img src="../images/slides2.png" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Awesome </span>
                            </h2>
                            <br>
                            <h3>
                              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#about">Estas</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">KAJAJJAJA</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="../images/slides3.png" alt="Third slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Use without any charge</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#about">Espero</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Que</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="../images/slides4.png" alt="Fourt slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Use without any charge</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#about">Bien</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">JAJAJJAJAJJA</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- /carousel -->

  <!-- Section: Materiales De Nuestra Pagina -->
<section id="service" class="home-section color-dark bg-gray">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
            <h2 class="h-bold">Materiales</h2>
            <div class="divider-header"></div>
            <p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
         </div>
       </div>
     </div>
   </div>
</div>

<div class="text-center">
    <div class="container">
      <div class="row">
            <div class="col-md-3 ">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                  <div><img style="max-width:230px; margin-left:-5px;" src="../images/rambo1.jpg" class="img-rounded" alt="imagen circular">
                      <h5>Mayonesa</h5>
                      <p>
                      Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                      </p>
                      <a href="#" class="btn btn-skin">Ver Más</a>
                    </div>
                </div>
             </div>
          </div>

            <div class="col-md-3 ">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/rambo1.jpg" class="img-rounded" alt="imagen circular">
                        <h5>Mayonesa</h5>
                        <p>
                        Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                        </p>
                        <a href="#" class="btn btn-skin">Ver Más</a>
                   </div>
                </div>
             </div>
          </div>

            <div class="col-md-3 ">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/rambo1.jpg" class="img-rounded" alt="imagen circular">
                        <h5>Mayonesa</h5>
                        <p>
                        Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                        </p>
                        <a href="#" class="btn btn-skin">Ver Más</a>
                   </div>
                </div>
             </div>
          </div>
            <div class="col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/rambo1.jpg" class="img-rounded" alt="imagen circular">
                        <h5>Mayonesa</h5>
                        <p>
                        Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                        </p>
                        <a href="#" class="btn btn-skin">Ver Más</a>
                    </div>
                </div>
             </div>
          </div>
        </div>    
    </div>
</div>

</section>
  <!-- /Section: services -->
  


@endsection

  <!-- Archivos Core JavaScript -->  

