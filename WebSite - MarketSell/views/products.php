<?php
    include_once('../controller/verificarLogado.php');
    include_once('../controller/visualizar.php');

    include_once('../controller/verificarLogado.php');
    UserController::verificarLogin();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link type="image/x-icon" rel="shortcut icon" href="../src/favicon.ico" />
    <link rel="stylesheet" href="../css/style.products.css">
    <title>Produtos - Marketsell</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">MarketSell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../controller/logout.php" class="btn btn-outline-danger">Deslogar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="m-5">

        <div class="text-end mb-3">
            <a href="inserir.php" class="btn btn-success">Novo Produto</a>
        </div>

        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Data de Fabricação</th>
                    <th scope="col">Data de Validade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    visualizarProdutos($conn, $_GET['search'] ?? null);
                ?>

            </tbody>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
