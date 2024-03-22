@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!--ESTQQUE-->

<div class="container1" style="margin: 0;">
  <div class="card-container">

    <div class="card">
      <img src="/img/bn1.jpg" class="card-img-top" alt="banana" class="color: #dc3545;" style="margin:0 15px">
      <div class="card-body text-center">
        <h5 class="card-title">Banana</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/maça.JPEG" class="card-img-top" alt="maça" style="margin:0 15px" >
      <div class="card-body text-center">
        <h5 class="card-title">Maçã</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/pk.JPEG" class="card-img-top" alt="pk" style="margin:0 15px">
      <div class="card-body text-center">
        <h5 class="card-title">Carne</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/coca.png" class="card-img-top" alt="coca">
      <div class="card-body text-center">
        <h5 class="card-title">Coca Deniels</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/coco.jpg" class="card-img-top" alt="Coco">
      <div class="card-body text-center">
        <h5 class="card-title">Coco</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

    <div class="card">
      <img src="/img/morango.jpg" class="card-img-top" alt="Morango" style="margin:0 15px";>
      <div class="card-body text-center">
        <h5 class="card-title">Morango</h5>
        <a href="/estoque" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>
    </div>

  </div>
</div>

<!--FUNCIONARIOS-->

<div class="container mt-5"> 

  <div class="row">       
    <div class="col-md-6 mb-4">      
      <div class="card">        
        <img src="/img/robertao.jpg" class="card-img-top" alt="Imagem funcionario" style="border-radius: 50%; padding: 0">
        <div class="card-body">          
          <h5 class="card-title">Funcionario do Mês</h5>
          <a href="/funcionarios" class="btn btn-secondary custom-btn button-card">Visualizar</a>
      </div>      
    </div>    
  </div>

  <!--FORNECEDORES-->
  <div class="col-md-6 mb-4">
    <div class="card">
      <img src="/img/fornecedor.png" class="card-img-top" alt="Imagem fornecedor" style="border-radius: 50%;">
        <div class="card-body">
          <h5 class="card-title">Fornecedores</h5>          
          <a href="/funcionarios" class="btn btn-secondary custom-btn button-card">Visualizar</a>
        </div>
      </div>
      </div>
    </div>

</div>


@endsection