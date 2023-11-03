@extends('layouts.main')
<!---=====================-->
@section('title', "home")
@section('header')
@section('footer')
<!---=====================-->
  
<h1 class="text-center mt-3 mb-3">Funcionarios Cadastrados</h1>
    
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($funcionariosINFO as $funcionario)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $funcionario['nome'] }}</td>
                <td>{{ $funcionario['nascimento']->format('d/m/Y') }}</td>
                <td>{{ $funcionario['email'] }}</td>
                <td>{{ $funcionario['telefone'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!---=====================-->
@endsection