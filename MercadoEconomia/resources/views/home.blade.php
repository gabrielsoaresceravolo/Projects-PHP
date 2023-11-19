@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container1">
    <div class="card-container">
            <div class="card" style="width: 18rem;">
                <img src="/img/bn1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Banana</h5>
                    <a href="/estoque" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/maça.JPEG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maçã</h5>                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/img/pk.JPEG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Carne</h5>
                    <a href="###########" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        

        <div class="card" style="width: 18rem;">
                <img src="/img/dt.JPEG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Detergente Ype</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        </div>
</div>

<div class="alert alert-primary" style="display: flex; justify-content: center; align-items: center; margin: top 10%;" role="alert">
        Site desenvolvido apenas para aprendizagem do laravel, não foi trabalhado um desing!
</div>
,

@endsection