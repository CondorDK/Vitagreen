<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo e(asset('/css/demo.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/css/animate.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/css/nivo-lightbox.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/css/nivo-lightbox-theme/default/default.css')); ?>" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('/css/owl.carousel.css')); ?>" rel="stylesheet" media="screen" />
      <link href="<?php echo e(asset('/css/owl.theme.css')); ?>" rel="stylesheet" media="screen" />
      <link href="<?php echo e(asset('/css/owl.flexslider.css')); ?>" rel="stylesheet"/>
      <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet"/>
      <link href="<?php echo e(asset('/color/default.css')); ?>" rel="stylesheet"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Vitagreen <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img style="max-width:100px; margin-top: -7px;" class="img-responsive2" src="../images/Vita.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" href="<?php echo e(url('/home')); ?>">Materiales</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a class="btn btn-default btn-xs" href="<?php echo e(url('/login')); ?>">Ingresar</a></li>
                        <li><a class="btn btn-default btn-xs" href="<?php echo e(url('/register')); ?>">Registrarse</a></li>
                        <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> 
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Perfil</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
