<?php

session_start();
require "funcoesBD.php";

//cadastro de clientes
if(isset ($_POST['nome']) && isset ($_POST ['Sobrenome']) &&
isset($_POST['CPF']) && isset($_POST['data']) &&
isset($_POST['Telefone']) && isset($_POST['Email']) &&
isset($_POST['Senha'])){


    $nome =$_POST['nome'];
    $sobrenome=$_POST['Sobrenome'];
    $cpf = $_POST['CPF'];
    $dataNasc = $_POST['data'];
    $telefone=$_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    inserirCliente($cpf, $nome, $sobrenome,$dataNasc, $telefone, $email, $senha);

    
    /*echo "Nome: ". $nome ."Sobrenome: ". $sobrenome . "CPF: ". $cpf ."<br>";
    echo "DataNasc: ". $dataNasc . "Telefone: ". $telefone . "<br>";
    echo "Email: ".  $email  ."Senha: ".$senha;*/


    header('Location:../view/cadastroCliente.php');
    die();

}


//cadastro dos funcionarios
  if (isset ($_POST['nome']) && isset ($_POST ['Sobrenome']) &&
isset($_POST['CPF']) && isset($_POST['data']) &&
isset($_POST['Telefone']) && isset($_POST['cargo']) && isset($_POST['salario']) &&
isset($_POST['email']) && isset($_POST['Senha'])){


    $nome =$_POST['nome'];
    $sobrenome=$_POST['Sobrenome'];
    $cpf = $_POST['CPF'];
    $dataNasc = $_POST['data'];
    $telefone=$_POST['Telefone'];
    $cargo=$_POST['cargo'];
    $salario = $_POST['salario'];
    $email = $_POST['email'];
    $senha = $_POST['Senha'];

    inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha);

    header('Location:../view/cadastroFuncionarios.php');
    die();
   

}

//cadastro dos produtos

if (isset ($_POST['nome']) && isset ($_POST ['fabricante']) && isset($_POST['descricao']) && isset($_POST['valor']) &&
isset($_POST['quantidade'])){


    $nome =$_POST['nome'];
    $fabricante=$_POST['fabricante'];
    $descri = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quant = $_POST['quantidade'];
    

    inserirProduto($nome, $fabricante, $descri, $valor, $quant);

    header('Location:../view/cadastrarProduto.php');
    die();
}

//cadastrando imagem de cliente




?>