<?php

    include_once('config.php');
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) 
    {
        header('Location: ../views/login.php');
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome = $_POST['nome'];
        $nome = htmlspecialchars($nome, ENT_QUOTES);

        $preco = $_POST['preco'];
        $preco = htmlspecialchars($preco, ENT_QUOTES);

        $tipo = $_POST['tipo'];
        $tipo = htmlspecialchars($tipo, ENT_QUOTES);

        $data_fabricacao = $_POST['data_fabricacao'];
        $data_fabricacao = htmlspecialchars($data_fabricacao, ENT_QUOTES);

        $data_validade = $_POST['data_validade'];
        $data_validade = htmlspecialchars($data_validade, ENT_QUOTES);

        // Verificar se os campos estão vazios
        if (empty($nome)) 
        {
            echo "<script>window.alert('Digite o nome do produto!');</script>";
            exit();
        }
        if (empty($preco)) 
        {
            echo "<script>window.alert('Digite o preco do produto!');</script>";
            exit();
        }
        if (empty($tipo)) 
        {
            echo "<script>window.alert('Digite o tipo do produto!');</script>";
            exit();
        }
        if (empty($data_fabricacao)) 
        {
            echo "<script>window.alert('Insira a data de fabricacao do produto!');</script>";
            exit();
        }
        if (empty($data_validade)) 
        {
            echo "<script>window.alert('Insira a data de validade do produto!');</script>";
            exit();
        }

        $sqli = mysqli_query($conn, "INSERT INTO products (nome, preco, tipo, data_fabricacao, data_validade) 
        VALUES ('$nome', '$preco', '$tipo', '$data_fabricacao', '$data_validade')");

        if ($sqli) // SUCESSO AO INSERIR
        {
            header('Location: ../views/products.php');
            exit();
        } 
        else // ERRO AO INSERIR
        {
            echo "<script>window.alert('Erro ao Inserir um novo Produto!');</script>";
            exit();
        }
    }
?>
