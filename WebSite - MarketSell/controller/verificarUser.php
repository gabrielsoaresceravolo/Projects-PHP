<?php

    include_once('../model/User.php'); // Corrigido o caminho do arquivo User.php
    include_once('config.php');

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1) 
        {
            $row = $result->fetch_assoc();
            $senha_hash = $row['senha'];

            if(password_verify($senha, $senha_hash)) 
            {
                $_SESSION['email'] = $email;
                header('Location: ../views/products.php');
                exit();
            } 
            else 
            {
                echo "<script>window.alert('Email ou senha incorretos!');</script>";
            }
        } 
        else 
        {
            echo "<script>window.alert('Usuário não encontrado!');</script>";
        }
    }

?>
