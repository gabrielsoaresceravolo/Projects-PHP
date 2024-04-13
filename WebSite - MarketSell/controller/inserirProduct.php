<?php

    include_once('config.php');
    include_once('../model/produto.php');

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Obter os dados do formulário
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];
        $data_fabricacao = $_POST['data_fabricacao'];
        $data_validade = $_POST['data_validade'];

        // Criar um objeto Produto com os dados do formulário
        $produto = new Produto($nome, $preco, $tipo, $data_fabricacao, $data_validade);

        // Tentar salvar o produto no banco de dados
        if ($produto->save()) 
        {
            // Redirecionar para a página de produtos em caso de sucesso
            header('Location: ../views/products.php');
            exit();
        } 
        else 
        {
            // Em caso de erro ao salvar o produto, exibir uma mensagem de erro
            echo "<script>window.alert('Erro ao inserir um novo Produto!');</script>";
            exit();
        }
    }

?>
