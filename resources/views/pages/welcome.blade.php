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
    <img src="../images/slides1.jpg" alt="First slide">
            <!-- Static Header -->
            <div class="header-text hidden-xs">
                <div class="col-md-12 text-center">
                <h2><span>Recicla con Nosotros</span></h2>
                    <br>
                <h6><span>Vitagreen es un mundo que te ayuda a reciclar
                  <br>
                  transformando materiales en desuso en recursos valiosos
                  <br>
                  promoviendo así la concientización y preservación del medio ambiente.</span></h6>
       </div>
   </div><!-- /header-text -->
</div>

          <div class="item">
            <img src="../images/slides2.png" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Dona Materiales</span>
                            </h2>
                            <br>
                            <h6>
                              <span>En Vitagreen te contactamos con personas que necesitan ese material que a vos te sobra
                                <br>
                                trabajando juntos en el cuidado de nuestro planeta.</span>
                            </h6>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="../images/slides3.png" alt="Third slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Recibir Donación</span>
                            </h2>
                            <br>
                            <h6>
                              <span> Gracias a Vitagreen ahora conseguir ese material que te falta para reciclar es posible. Sumate y ayudanos a promover el cuidado del medio ambiente a través del Reciclaje.</span>
                            </h6>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="../images/slides4.png" alt="Fourt slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Como reciclar</span>
                            </h2>
                            <br>
                            <h6>
                              <span>Además podes encontrar tutoriales de como reutillizar materiales y también compartir tus ideas.</span>
                            </h6>
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
                  <div><img style="max-width:230px; margin-left:-5px;" src="../images/PAPELSolo.png" class="img-rounded" alt="imagen circular">
                      <h5>Papel</h5>
                      <p>
                       Cada tonelada de papel reciclado equivale a no talar aproximadamente 20 árboles, y a no usar 1500 litros de gasoil, 4000 kilowats de energía y 25000 litros de agua. Esos 20 árboles salvados absorben un total de 110 kilos de dióxido de carbono por año.
                      </p>
                      <a href="{{ url('/materiales') }}" class="btn btn-skin">Ver Más</a>
                    </div>
                </div>
             </div>
          </div>

            <div class="col-md-3 ">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/PLASTICOSolo.png" class="img-rounded" alt="imagen circular">
                        <h5>Plastico</h5>
                        <p>
                        El plástico desechado que va a ríos, lagunas y océanos, mata alrededor de 1 millón de animales por año. Una botella de plástico puede tardar hasta 1000 años de biodegradarse.
                        </p>
                        <a href="{{ url('/materiales') }}" class="btn btn-skin">Ver Más</a>
                   </div>
                </div>
             </div>
          </div>

            <div class="col-md-3 ">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/TELGOPORSolo.png" class="img-rounded" alt="imagen circular">
                        <h5>Telgopor</h5>
                        <p>
                        Bandejitas de supermercado, potes térmicos y embalajes de electrodomésticos. Todos estos productos están hechos de poliestireno, conocido comúnmente como Telgopor. Este material puede aprovecharse desde sus múltiples presentaciones para tratarse y darle nueva vida.
                        </p>
                        <a href="{{ url('/materiales') }}" class="btn btn-skin">Ver Más</a>
                   </div>
                </div>
             </div>
          </div>
            <div class="col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div><img style="max-width:230px; margin-left:-5px;" src="../images/VIDRIOSolo.png" class="img-rounded" alt="imagen circular">
                        <h5>Vidrio</h5>
                        <p>
                        El vidrio es 100% reciclable y puede ser reciclado ilimitadas veces. Este proceso consume sólo el 25% de la energía necesaria para hacer vidrio nuevo. A su vez, reciclando vidrio en vez de fabricar nuevo, reduce la contaminación del aire en un 20% y la del agua en un 50%.
                        </p>
                        <a href="{{ url('/materiales') }}" class="btn btn-skin">Ver Más</a>
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

