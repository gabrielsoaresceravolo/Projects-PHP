<!DOCTYPE html>
<html lang=pt-BR>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="image/x-icon" rel="shortcut icon" href="../src/favicon.ico" />
        <link rel="stylesheet" href="../css/style.login.css">
        <title>Registrar - MarketSell</title>
    </head>

    <body>
        <form action="../controller/novoUser.php" method="POST">

            <p>Criar uma Conta</p>

            <label for="nome">
                Nome
                <input type="text" id="nome" name="nome" />
            </label>

            <label for="email">
                Email
                <input type="email" id="email" name="email" />
            </label>

            <label for="senha">
                Senha
                <input type="password" id="senha" name="senha" />
            </label>

            <button type="submit" name="submit"> Cadastrar </button>

            <a href="login.php">Já sou cliente ></a>

        </form>
    </body>
</html>