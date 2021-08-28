@extends('plantilla.plantilla')

@section('title','carolina wireles')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- banner tamaño recomendado 984x382 -->
      <img src="https://topesdegama.com/app/uploads-topesdegama.com/2019/10/Realme-X2-PRo-2.jpg?x=984&y=382" class="d-block w-100" alt="...">
      <!-- tamaño recomendado es de 190x190 -->
      <img class="img-company" src="https://topesdegama.com/app/uploads-topesdegama.com/2019/10/Realme-X2-PRo-2.jpg?x=190&y=190" alt="...">
      <span class="sub-title" >Carolina Wireless</span>
    </div>
    <div class="back" style="position:absolute; width:100%; background:blue; opacity:0.2; top:0; bottom:0;"></div>
  </div>
</div>
<div>
  <div class="container-store">
    <!-- cards de telefonos y laptops-->
    <div class="">
      <div class="row">
        <div class="col-12">
          <div class="titles-categories">
            <a href="./pages/categoryMovil.php">Telefonos / Tabletas</a>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-4 col-sm-6 col-lg-3 container-img">
            <a href="./producto"><img src="https://icdn.dtcn.com/image/digitaltrends_es/galaxy-a52-colors-416x416.jpg" class="card-img-top" alt="..."></a>
            <div class="banner-image-categories">
              <p>(NOMBRE DE PRODUCTO)</p>
              <p>$ 0.00</p>
            </div>
          </div>
      </div>
    </div>
      <!-- cards de accesorios de telefono-->
    <div class="">
      <div class="row">
        <div class="col-12">
          <div class="titles-categories">
              <a href="./pages/categoryAcces.php">Accesorios de Telefonos</a>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-4 col-sm-6 col-lg-3 container-img">
            <a href="./producto"><img src="https://topesdegama.com/app/uploads-topesdegama.com/2019/10/Realme-X2-PRo-2.jpg?x=950&y=580" class="card-img-top" alt="..."></a>
            <div class="banner-image-categories">
              <p>(NOMBRE DE PRODUCTO)</p>
              <p>$ 0.00</p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
