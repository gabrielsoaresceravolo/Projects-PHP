<?php

    include_once('config.php');

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        $email = $_POST['email'];
        $email = htmlspecialchars($email, ENT_QUOTES);

        $senha = $_POST['senha'];
        $senha = htmlspecialchars($senha, ENT_QUOTES);

        // Verificar se o email existe no banco de dados
        $stmt = $conn -> prepare("SELECT * FROM users WHERE email = ?");
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if($result -> num_rows == 1)
        {
            // Usuário encontrado
            $row = $result -> fetch_assoc();
            $senha_hash = $row['senha'];

            // Criptografar a senha inserida para comparar com a armazenada no banco
            $senha_criptografada = hash('sha384', $senha);

            // Verificar a senha
            if($senha_criptografada === $senha_hash)
            {
                // Login Aceito
                $_SESSION['email'] = $email;
                header('Location: ../views/products.php');
                exit();
            }
            else
            {
                // Senha incorreta
                echo "<script>window.alert('Email ou senha incorretos!');</script>";
            }
        }
        else
        {
            // Usuário não encontrado
            echo "<script>window.alert('Usuário não encontrado!');</script>";
        }
    }
?>