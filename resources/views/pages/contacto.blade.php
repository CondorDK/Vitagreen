@extends('layouts.main')

@section('title', '| AcercaDe')

@section('content')

    <!-- ============================  BreadCrumb Start ============================ -->

  <section class="breadcrumb-container">
  
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Inicio</a> </li>
            <li class="divider"><span class="divider">/</span></li>
            <li class="active">Contacto</li>
          </ul>
        </div> <!-- end span12 -->
      </div> <!-- end row -->
    </div> <!-- end container -->


  </section> <!-- end breadcrumb-container -->


    <!-- ============================  Breadcrumb End ============================ -->



    
    <!-- ============================  Main Tagline Start ============================ -->
    <section class="main-tagline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1 class="title center v2">Contact Us</h1>
            <h6 class="subtitle center">Pastry gummi bears gummies marzipan danish jelly beans chupa chups marshmallow</h6>
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
            <h5 class="title center"><span>Get in Touch</span></h5>
          </div> <!-- end span12 -->
          <br>
          <div class="span12">
            <p class="content">Topping halvah tiramisu faworki caramels faworki oat cake wypas jelly beans. Pie faworki tiramisu candy canes. Pastry carrot cake donut icing applicake liquorice gmiesi chocolate bar pie. Caramels chocolate bar apple pie chocolate cake cake tiramisu tiramisu croissant. Tart gummi bears pudding pastry pie pastry sweet. Fruitcake ccake faworki dessert cookie pastry dessert tiramisu. Jelly beans bonbon jelly-o cookie gummi bears toffee chocolate cake toffee tootsie roll. Jelly beans sweet icing icing ocake candy canes jujubes. Jelly jelly beans caramels gingerbread jujubes marshmallow. Pudding liquorice tiramisu sweet soufflé biscuit. Cake icing marshmallow bear claw jujubes macaroon brownie apple pie marshmallow. Dragée candy danish.</p>
          </div> <!-- end span12 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end title-separator -->


    <!-- ============================  Title Separator Ends ============================ -->


    <!-- ============================  Contact Form Start ============================ -->
    <section class="contact-form">
      <div class="container">
        <div class="row">
          <div class="contact-form-inner">
		      <div id="alert">
		  		<div class="message"></div>
			  </div>
              <form onsubmit="return submitForm();" action="http://templatation.com/Site-templates/Piksel/contact.html" method="post" class="form-a" name="homefrm1" id="homefrm1">
				<input type="hidden" name="event" value="start">
                  <div class="span4">
                    <fieldset>
                      <legend>Leave a Comment</legend>
                          <input type="text" placeholder="Name *" id="ca" name="name" required="">
                          <input type="text" placeholder="E-mail *" id="cb" name="email" required="">
                          <input type="text" placeholder="yoursite.com" id="cc" name="website" required="">
                          <label>Field marked with * are mandatory !</label>                      
                    </fieldset>
                  </div> <!-- end span6 -->
                  <div class="span5">
                      <textarea cols="30" rows="7" placeholder="Message" id="cd" name="message" required=""></textarea>
					  <p class="contact-check">
					   <input type="checkbox" name="copyemail_check">Send copy to email you entered above?
					  </p>
                      <button type="submit" class="btn btn-primary pull-right">Send it</button>
                  </div> <!-- end span7 -->
              </form>
              <div class="span3">
                <div class="contact-info">
                  <ul class="unstyled contact-info-inner">
                    <li><i class="icon-map-marker icon-large"></i> <span class="text">71 Madan Mohan Malviya Marg,<br> San Francisco, USA</span></li>
                    <li><i class="icon-mobile-phone icon-large"></i> <span class="text">Phone: 011-521-3457</span></li>
                    <li><i class="icon-print icon-large"></i> <span class="text">Fax: 011-521-3457</span></li>
                    <li><i class="icon-envelope-alt icon-large"></i> <span class="text">Mail: </span> <a href="http://templatation.com/Site-templates/Piksel/contact.html#">user@companyname.com</a></li>
                    <li><i class="icon-globe icon-large"></i> <span class="text">Web: </span> <a href="http://templatation.com/Site-templates/Piksel/contact.html#">www.websitename.com</a></li>
                  </ul> <!-- end contact-info-inner -->
                </div> <!-- end contact-info -->
              </div> <!-- end span3 -->
          </div> <!--end comments-form-->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end contact-form -->

    <!-- ============================  Contact Form Ends ============================ -->




@endsection
