<?php

    include_once('config.php');

    if(isset($_POST['submit']))
    {

        date_default_timezone_set('Brazil/East');
        $data = date("Y-m-d H:i:s");
        $ip = $_SERVER['REMOTE_ADDR'];

        $nome = $_POST['nome'];
        $nome = htmlspecialchars($nome,ENT_QUOTES);

        $email = $_POST['email'];
        $email = htmlspecialchars($email,ENT_QUOTES);

        $senha = $_POST['senha'];
        $senha = htmlspecialchars($senha,ENT_QUOTES);

        if (empty($email)) 
        {
            echo "<script>window.alert('Digite o e-mail!');</script>";
            exit();
        }
        if (empty($senha)) 
        {
            echo "<script>window.alert('Digite a senha!');</script>";
            exit();
        }
        if (strlen($senha) < 6) 
        {
            echo "<script>window.alert('Sua senha deve conter no mínimo 6 digitos!');</script>";
            exit();
        }

        $veric = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $verifc = mysqli_num_rows($veric);

        if($verifc > 0) // JA EXISTE UM CONTA
        {
            echo "<script>window.alert('Você já cadastrou!');</script>";
            echo "<meta http-equiv='refresh' content='0; ../views/login.php'>";
            exit();
        } 
        else 
        {
            $senhaCrip = hash('sha384', $senha);

            $sqli = mysqli_query($conn, "INSERT INTO users (nome, email, senha, ip, data) 
            VALUES ('$nome', '$email', '$senhaCrip', '$ip', '$data')");
            
            if($sqli) // SUCESSO AO CADASTRAR
            {
                header('Location: ../views/login.php');
                exit();
            } 
            else // ERRO AO CADASTRAR
            {
                echo "<script>window.alert('Erro ao registrar!');</script>";
                exit();
            }
        }
    }
?>