<?php

    $db_host = 'localhost';     // Host do Banco
    $db_username = 'root';      // Usuário do Banco
    $db_password = '';          // Senha do Banco
    $db_name = 'marketsell';    // Nome do Banco

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    
    if($conn -> connect_errno) // ERRO AO CONECTAR COM O BANCO DE DADOS
    {
        echo "<script>console.log('Erro ao conectar ao banco de dados!');</script>";
        exit();
    }
    else // CONECTADO AO BANCO DE DADOS
    {
        echo "<script>console.log('Conectado ao banco de dados!');</script>";
    }

?>
