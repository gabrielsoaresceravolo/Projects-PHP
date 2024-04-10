<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" rel="shortcut icon" href="../src/favicon.ico" />
    <link rel="stylesheet" href="../css/style.login.css">
    <title>Login - MarketSell</title>
</head>

<body>
    
    <form action="../controller/verificarUser.php" method="POST">

        <p>Faça seu login</p>

        <label for="email">
            Email
            <input type="email" id="email" name="email">
        </label>

        <label for="senha">
            Senha
            <input type="password" id="senha" name="senha">
        </label>

        <button type="submit" name="submit"> Entrar </button>

        <a href="#">Esqueci minha senha</a>
        <a href="register.php">Ainda não sou cliente</a>

    </form>
</body>
