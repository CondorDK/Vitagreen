@extends('layouts.main')

@section('title', '| Home')

@section('content')



<!-- ============================  Slider Start ============================ -->


<section class="flexslider-container container">
    <div class="row">
      <div class="span12">
        <div class="flexslider" id="flex1">
          <div class="flex-viewport" style="overflow: hidden; position: relative; height: 0px;"><ul class="slides" style="width: 1000%; transition-duration: 1s; transform: translate3d(-2276px, 0px, 0px);">
            <li class="clone" style="width: 1138px; float: left; display: block;">
              <img src="images/slides1.jpg" alt="img">
                <!--<div class="captions">
                  <p class="description">Biscuit gummies pudding cookie wypas macaroon.</p>
                    </div>  end captions -->
                    </li>
                    <li class="clone" style="width: 1138px; float: left; display: block;">
                      <img src="images/slides2.png" alt="img">
                      <!--<div class="captions">
                          <p class="description">Biscuit gummies pudding cookie wypas macaroon.</p>
                      </div>  end captions -->
                    </li>
                    <li style="width: 1138px; float: left; display: block;" class="flex-active-slide">
                      <img src="images/slides3.png" alt="img">
                      <!--<div class="captions">
                          <p class="description">Biscuit gummies pudding cookie wypas macaroon.</p>
                      </div>  end captions -->
                    </li>
                    <li style="width: 1138px; float: left; display: block;" class="">
                      <img src="images/slides4.png" alt="img">
                      <!--<div class="captions">
                          <p class="description">Biscuit gummies pudding cookie wypas macaroon.</p>
                      </div>  end captions -->
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
            <h5 class="title center"><span>Descubrí nuestros servicios</span></h5>
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
                  <p class="content">Applicake pudding faworki halvaroon icing sugar plum cake powderi  jujubes pastry </p>
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

     <section class="title-separator">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5 class="title center"><span>Ultimos Posts</span></h5>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================  Title Separator Ends ============================ -->


    <!-- ============================  Recent Posts Start ============================ -->

    <section class="recent-posts">
      <div class="container">
    @foreach ($como as $com)
        <div class="row">
          <div class="span4">
            <div class="recent-post">
              <figure class="recent-post-img">
                <img src="/images/{{$com->image}}">
              </figure> <!-- end recent-post-img -->


              <div class="post-content">
                  <h5 class="title"><a href="#"><span>{!! $com->title !!}</span></a></h5>
                  <p class="content">{!! substr($com->body, 0, 300  ) !!}{{ strlen($com->body) > 300 ? "..." : ""}}
                    <a href="{{ url('/como') }}" class="read-more" title="Read More ..."><img src="images/read-more.png" alt="img"></a>
                  </p>

                  <ul class="unstyled inline post-meta">
                    <li><a href="#"><i class="icon-calendar"></i>  <span>{!! $com->created_at !!}</span></a></li>
                    <!-- <li><a href="#"><i class="icon-comments"></i> <span>75 Comments</span></a></li> -->
                  </ul> <!-- end post-meta -->


                </div> <!-- end post-content -->

            </div> <!-- end recent-post -->
          </div> <!-- end span4 -->
          @endforeach
        </section>


    <!-- ============================  Recent Posts Ends ============================ -->

    <!-- ============================  Title Separator Starts ============================ -->

    <!-- <section class="title-separator">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5 class="title center"><span>Our Clients</span></h5> -->
          <!-- </div>
        </div>
      </div>
    </section> -->

    <!-- ============================  Title Separator Ends ============================ -->


    <!-- ============================  Recent Clients Start ============================ -->

    <!-- <section class="recent-clients">
      <div class="container">
        <div class="row">
          <ul class="unstyled recent-clients-list">
            <li><a href="#"><img src="images/client1.png" alt="img"></a></li>
            <li><a href="#"><img src="images/client2.png" alt="img"></a></li>
            <li><a href="#"><img src="images/client3.png" alt="img"></a></li>
            <li><a href="#"><img src="images/client4.png" alt="img"></a></li>
            <li><a href="#"><img src="images/client5.png" alt="img"></a></li> -->
          <!-- </ul>
        </div>
      </div>
    </section>  -->

    <!-- ============================  Recent Clients Ends ============================ -->


    <!-- ============================  Services and Works Starts ============================ -->

    <!-- <section class="services-works">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="services-container">
              <h4 class="title"><span>Our Services</span></h4>
              <p class="content">Applicake pudding faworki halvaroon icing suplum cake powderi  jujubpastry. Pudding marzicandy canes lollipop danish Applicake pie ice cream jujubes oat cake pudding tiramisu cupcake gummi bears. lemon drops.</p>

              <div class="row">
                <div class="span3">
                  <ul class="unstyled services-description">
                    <li><i class="icon-bar-chart icon-2x"></i> <span>Search Engine Optimization </span></li>
                    <li><i class="icon-list-alt icon-2x"></i> <span>Risk Managment </span></li>
                    <li><i class="icon-shopping-cart icon-2x"></i> <span>E-Commerce </span></li>
                    <li><i class="icon-suitcase icon-2x"></i> <span>Icon Designing</span></li>
                  </ul> -->
                  <!-- end span3 -->
                <!-- </div>
                <div class="span3">
                  <ul class="unstyled services-description">
                    <li><i class="icon-tablet icon-2x"></i> <span>Apps Development</span></li>
                    <li><i class="icon-globe icon-2x"></i> <span>Web Designing </span></li>
                    <li><i class="icon-camera icon-2x"></i> <span>Photography </span></li>
                    <li><i class="icon-beaker icon-2x"></i> <span>Game Development</span></li>
                  </ul> -->
                <!-- </div>
              </div>
            </div>
          </div>

          <div class="span6">
            <div class="works-container">
              <h4 class="title"><span>Recent Works</span></h4>

              <div class="work-img-container">
                <div class="row">
                  <div class="span3">
                    <div class="img-container">
                      <figure class="recent-work-img">
                        <img src="images/4.png" alt="img">

                        <figcaption class="rollover">
                          <ul class="unstyle inline gallery clearfix">
                            <li class="enlarge"><a href="images/4.png" rel="prettyPhoto" title="Photo 1"><i class="icon-search icon-large"></i></a></li>
                            <li class="link"><a href="#"><i class="icon-link icon-large"></i></a></li>
                          </ul> -->
                        <!-- </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="img-container">
                      <figure class="recent-work-img">
                        <img src="images/4-b.png" alt="img">

                        <figcaption class="rollover">
                          <ul class="unstyle inline gallery clearfix">
                            <li class="enlarge"><a href="images/4-b.png" rel="prettyPhoto" title="Photo 1"><i class="icon-search icon-large"></i></a></li>
                            <li class="link"><a href="#"><i class="icon-link icon-large"></i></a></li>
                          </ul> -->
                        <!-- </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="span3">
                    <div class="img-container">
                      <figure class="recent-work-img">
                        <img src="images/4-c.png" alt="img">

                        <figcaption class="rollover">
                          <ul class="unstyle inline gallery clearfix">
                            <li class="enlarge"><a href="images/4-c.png" rel="prettyPhoto" title="Photo 1"><i class="icon-search icon-large"></i></a></li>
                            <li class="link"><a href="#"><i class="icon-link icon-large"></i></a></li>
                          </ul> -->
                        <!-- </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="img-container">
                      <figure class="recent-work-img">
                        <img src="images/4-d.png" alt="img">

                        <figcaption class="rollover">
                          <ul class="unstyle inline gallery clearfix">
                            <li class="enlarge"><a href="images/4-d.png" rel="prettyPhoto" title="Photo 1"><i class="icon-search icon-large"></i></a></li>
                            <li class="link"><a href="#"><i class="icon-link icon-large"></i></a></li>
                          </ul> -->
                        <!-- </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  -->

    <!-- ============================  Services and Works Ends ============================ -->

    <!-- ============================  Get in Touch Start ============================ -->

    <!-- <section class="get-in-touch">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="get-in-container">
              <div class="row-fluid">
                <div class="span10"> -->
                  <!-- <p class="content">Marzipan candy canes powder powder sesame snaps cupcake toffee biscuit bonbon. Sesame snaps oat cake cagummior bears chocolate gummi bears jujubes. Pudding marzicandy canes lollipop danish.</p>
                </div>
                <div class="span2">
                  <div class="call-to-action">
                    <a href="#" class="btn btn-primary btn-large">Get in Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  -->


    <!-- ============================  Get in Touch Ends ============================ -->



@endsection


  <!-- Archivos Core JavaScript -->
