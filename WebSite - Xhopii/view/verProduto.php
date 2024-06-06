<?php
require "../processamento/funcoesBD.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
     <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Ver Clientes</title>
</head>

<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionarios.php">Cadastro Funcionário</a></li>
            <li><a href="cadastrarProduto.php">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Produtos</h1>
            
            <?php

            $listaProduto = retornarProduto();
            while ($produto = mysqli_fetch_assoc($listaProduto)) {
                echo "<section class=\"conteudo-bloco\">";
                echo "<h2>" . $produto["nome"] . "</h2>";
                echo "<p> Fabricante:  " . $produto["fabricante"] . "</p>";
                echo "<p> Descrição:  " . $produto["descricao"] . "</p>";
                echo "<p> Valor:  " . $produto["valor"] . "</p>";
                echo "<p> Quantidade: " . $produto["quantidade"] . "<p>";
                echo "</section>";
            }
            ?>
            
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2022 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>

</html>