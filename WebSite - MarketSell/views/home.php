

<?php

// EM CONTRUÇÃO
// EM CONTRUÇÃO
// EM CONTRUÇÃO
// EM CONTRUÇÃO
// EM CONTRUÇÃO
// EM CONTRUÇÃO

    // Verificar se o usuário está logado
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) 
    {
        header('Location: ../views/login.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Marketsell</title>
    </head>
    <body>
        <br>
            <h1>Bem vindo <?php echo $nome_usuario; ?></h1>
        <br>
    </body>
</html>

<?php
    include_once('../controller/config.php');
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) 
    {
        header('Location: login.php');
        exit;
    }

    // Buscar o nome do usuário logado
    $email = $_SESSION['email'];
    $query = "SELECT nome FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $nome_usuario = $user['nome'];

?>
