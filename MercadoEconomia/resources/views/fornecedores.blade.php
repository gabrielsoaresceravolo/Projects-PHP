@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->


  
    <h1 class="text-center mt-3 mb-3">Fornecedores Cadastrados</h1>
    
    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Tipo de Produto que vende</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fornecedoresINFO as $fornecedor)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $fornecedor['nome'] }}</td>
            <td>{{ $fornecedor['endereco'] }}</td>
            <td>{{ $fornecedor['email'] }}</td>
            <td>{{ $fornecedor['telefone'] }}</td>
            <td>{{ implode(', ', $fornecedor['produto']) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="container-button">
    <button type="button" class="btn btn-warning">Alterar</button>
    <button type="button" class="btn btn-danger">Excluir</button>
    <button type="button" class="btn btn-info">Consultar</button>
</div>

<!---=====================-->
@endsection