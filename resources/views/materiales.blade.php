@extends('layouts.app')

@section('title', '| Materiales')

@section('content')

<section class="main-tagline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1 class="title center"><strong>COMUNIDAD VITAGREEN</strong></h1>
            <h3 class="subtitle center">Colabora con la comunidad recicladora, doná materiales, pedilos o aprende a reciclarlos.</h3>
          </div>
        </div>
      </div>
    </section>


    <div class="card">
      <div class="container-fluid">
        <div class="col-sm-4" style="background-color: #E8E8CD; border-color: #333;">
          <div class="card-block">
            <h4 class="card-title"><strong>Tengo materiales</strong></h4>
            <img class="card-img-top" src="images/tengotengo.png" alt="Card image cap">
            <h5 class="card-title">Tengo materiales y quiero donarlos...</h5>
            <p class="card-text">Doná materiales para alguien que necesite reciclarlos, detallá los matriales que tenes y date a conocer en nuestra comunidad.</p>
            <a href="tengo" class="btn btn-primary btn-lg btn-block">Tengo</a>
            <br>
          </div>
        </div>

        <div class="col-sm-4" style="background-color: #E8E8CD; border-color: #333;">
          <div class="card-block">
              <h4 class="card-title"><strong>Necesito</strong></h4>
            <img class="card-img-top" src="images/necesito.png" alt="Card image cap">
            <h5 class="card-title">Necesito materiales para reciclar...</h5>
            <p class="card-text">Si estás reciclando y necesitas mas materiales para continuar, ingresá tu pedido en nuestra comunidad.</p>
            <a href="necesito" class="btn btn-primary btn-lg btn-block">Necesito</a>
            <br>
          </div>
        </div>


        <div class="col-sm-4" style="background-color: #E8E8CD; border-color: #333;">
          <div class="card-block">
            <h4 class="card-title"><strong>¿Cómo reciclar?</strong></h4>
            <img class="card-img-top" src="images/comorec.png" alt="Card image cap">
            <h5 class="card-title">¿Cómo reciclo mis materiales?</h5>
            <p class="card-text">Si tenés los materiales pero no sabés como convertirlos para reciclar, ingresá en ésta categoria para informarte acerca de ello.</p>
            <a href="como" class="btn btn-primary btn-lg btn-block">¿Cómo?</a>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>



@endsection
