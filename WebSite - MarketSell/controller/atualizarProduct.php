<?php
    include_once('config.php');
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = $_POST['id'];

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

        $query = "UPDATE produtos SET nome=?, preco=?, tipo=?, data_fabricacao=?, data_validade=? WHERE id=?";
        $stmt = $conn -> prepare($query);
        $stmt -> bind_param("sssssi", $nome, $preco, $tipo, $data_fabricacao, $data_validade, $id);
        $stmt -> execute();

        if ($stmt -> affected_rows > 0) 
        {
            // SUCESSO AO ATUALIZAR
            header('Location: ../views/products.php');
            exit();
        } 
        else 
        {
            // ERRO AO ATUALIZAR
            echo "<script>window.alert('Erro ao atualizar o produto!');</script>";
            exit();
        }
    }
?>
