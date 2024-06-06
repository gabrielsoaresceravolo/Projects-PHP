<?php

function conectarBD()
{
    $conexao = mysqli_connect("localhost", "root", "", "xhopii");
    return ($conexao);
}
/*mysqli_query($conexao $consulta);*/

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente(cpf,nome, sobrenome, dataNascimento, telefone, email, senha)
        
    VALUES ('$cpf', '$nome', '$sobrenome', '$dataNasc', '$telefone', '$email', '$senha')";

    mysqli_query($conexao, $consulta);
}

function retornarClientes()
{

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return $listaClientes;
}



// cadastro dos funcionário

function inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (nome, sobrenome, cpf, dataNascimento, telefone, cargo, salario, email, senha)
        
    VALUES ('$nome', '$sobrenome', '$cpf', '$dataNasc', '$telefone',  '$cargo','$salario','$email', '$senha')";

    mysqli_query($conexao, $consulta);
}

function retornarFuncionario()
{

    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionario";
    $listaFuncionario = mysqli_query($conexao, $consulta);
    return $listaFuncionario;
}

// cadastro dos produtos

function inserirProduto($nome, $fabricante, $descri, $valor, $quant)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto(nome, fabricante, descricao, valor, quantidade)
        
    VALUES ('$nome', '$fabricante', '$descri', '$valor', '$quant')";

    mysqli_query($conexao, $consulta);
}

function retornarProduto()
{

    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProduto = mysqli_query($conexao, $consulta);
    return $listaProduto;
}