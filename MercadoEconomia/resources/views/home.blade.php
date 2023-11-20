@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="container1">
  <div class="card-container">

    <div class="card">
      <img src="/img/bn1.jpg" class="card-img-top" alt="banana" class="color: #dc3545;">
      <div class="card-body text-center">
        <h5 class="card-title">Banana</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/maça.JPEG" class="card-img-top" alt="maça">
      <div class="card-body text-center">
        <h5 class="card-title">Maçã</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/pk.JPEG" class="card-img-top" alt="pk">
      <div class="card-body text-center">
        <h5 class="card-title">Carne</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/cocaJACKDANIELS.JPEG" class="card-img-top" alt="coca">
      <div class="card-body text-center">
        <h5 class="card-title">Coca Deniels</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/fogao.JPEG" class="card-img-top" alt="fogao">
      <div class="card-body text-center">
        <h5 class="card-title">Fogão</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/tv.webp" class="card-img-top" alt="tv">
      <div class="card-body text-center">
        <h5 class="card-title">Televisão</h5>
        <a href="#" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

  </div>
</div>

@endsection