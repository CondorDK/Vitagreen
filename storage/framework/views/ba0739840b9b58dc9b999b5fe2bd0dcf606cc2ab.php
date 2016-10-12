<!DOCTYPE html>
<html>
<head>
<!-- Fontawesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<style>
.body {
    background-color: #bbb;
  }
  
  .container--head {
    background: #BF3E11;
  }
  
  .tooltip-carousel {
    position: absolute;
    z-index: 11;
    border-radius: 50%;
  }
  
  .caraousel-tooltip-item {
    display: none;
  }
  
  .caraousel-tooltip-item.active {
    display: block;
  }

</style>


<div class="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-tooltip">
      <div class="caraousel-tooltip-item active" data-index="0">
      </div>
      <div class="caraousel-tooltip-item" data-index="1">
        <a href="#" class="tooltip-carousel" style="top:120px;left: 300px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          <span class="fa fa-plus"></span>
        </a>
      </div>
      <div class="caraousel-tooltip-item" data-index="2">
        <a href="#" class="tooltip-carousel" style="top:100px;left: 500px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          <span class="fa fa-plus"></span>
        </a>
      </div>
      <div class="caraousel-tooltip-item" data-index="3">
        <a href="#" class="tooltip-carousel" style="top:20px;left: 300px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          <span class="fa fa-plus"></span>
        </a>
      </div>
      <div class="caraousel-tooltip-item" data-index="4">
        <a href="#" class="tooltip-carousel" style="top:180px;left: 200px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          <span class="fa fa-plus"></span>
        </a>
      </div>
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://lorempixel.com/1000/300/food?1" alt="..." style="width:100%">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
        </div>
      </div>
      <div class="item">
        <img src="http://lorempixel.com/1000/300/food?2" alt="..." style="width:100%">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
        </div>
      </div>
      <div class="item">
        <img src="http://lorempixel.com/1000/300/food?3" alt="..." style="width:100%">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
        </div>
      </div>
      <div class="item">
        <img src="http://lorempixel.com/1000/300/food?4" alt="..." style="width:100%">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
        </div>
      </div>
      <div class="item">
        <img src="http://lorempixel.com/1000/300/food?1" alt="..." style="width:100%">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>



</body>
</html>
