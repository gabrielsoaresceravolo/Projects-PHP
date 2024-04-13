<?php
    require_once("config.php");
    require_once("../model/usuario.php");

    session_start();

    if(isset($_POST['submit'])) 
    {
        date_default_timezone_set('Brazil/East');
        $data = date("Y-m-d H:i:s");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // =========================================================================================

        if (empty($email) || empty($senha)) 
        {
            echo "<script>window.alert('Preencha todos os campos obrigatórios!');</script>";
            echo "<meta http-equiv='refresh' content='0; ../views/register.php'>";
            exit();
        }
        if (strlen($senha) < 6) 
        {
            echo "<script>window.alert('Sua senha deve conter no mínimo 6 digitos!');</script>";
            echo "<meta http-equiv='refresh' content='0; ../views/register.php'>";
            exit();
        }

        // =========================================================================================

        // Limpar os código - PROTEÇÃO CONTRA XSS
        $nome = htmlspecialchars($nome, ENT_QUOTES);
        $email = htmlspecialchars($email, ENT_QUOTES);
        $senha = htmlspecialchars($senha, ENT_QUOTES);

        // Criptografar a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        global $conn;

        $veric = prepareQuery($conn, "SELECT * FROM usuarios WHERE email=?", [&$email]);
        $verifc = $veric->num_rows;

        if($verifc > 0) 
        {
            echo "<script>window.alert('Você já se cadastrou antes!');</script>";
            echo "<meta http-equiv='refresh' content='0; ../views/login.php'>";
            exit();
        } 
        else 
        {
            $user = new User($nome, $email, $senhaCriptografada);

            if($user->save()) 
            {
                echo "<script>window.alert('Cadastrado com sucesso!');</script>";
                header('Location: ../views/login.php');
                exit();
            } 
            else 
            {
                echo "<script>window.alert('Erro ao registrar!');</script>";
                echo "<meta http-equiv='refresh' content='0; ../views/register.php'>";
                exit();
            }
        }
    }
?>
