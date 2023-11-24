@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->

<h1 class="text-center mt-3 mb-3">Produtos do Estoque</h1>
    
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $produto['nome'] }}</td>
            <td>R$ {{ $produto['preco'] }}.00</td>
            <td>{{ implode(', ', $produto['tipo']) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



<!---=====================-->
@endsection