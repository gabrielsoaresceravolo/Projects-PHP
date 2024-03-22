<?php

// Banco de dados
$servidor = $_ENV['servidor'];
$username = $_ENV['username'];
$password = $_ENV['password'];
$dbname = $_ENV['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    echo "Erro ao se conectar com o banco!";
}

else 
{
    try 
    {
        // Cria a conexão com o banco de dados
        $conexao = new PDO("mysql:host = $servidor ; dbname = $dbname", $username, $password);

        // Modo de erro do PDO
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Informações do Login
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar o usuário
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) 
        {
            // Login aceito
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: home.php");
        } 
        else 
        {
            // Login falhou
            echo "Nome de usuário ou senha incorretos. <a href='login.php'> Tente novamente </a>";
        }

        $conn->close();
    }

    catch (PDOException $e) 
    {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
    
    // Fecha a conexão
    $conexao = null;  
}

?>
