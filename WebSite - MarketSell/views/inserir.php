<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link type="image/x-icon" rel="shortcut icon" href="../src/favicon.ico" />
        <link rel="stylesheet" href="../css/style.forms.css">
        <title>Editar Produto - Marketsell</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">MarketSell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <div class="container">
            <h2 class="mt-5 mb-5">Editar Produto</h2>
            <form method="POST" action="../controller/inserirProduct.php">
                <div class="mb-3">
                    <label for="nome" class="form-label font-weight-bold">Nome:</label>
                    <input type="text" class="form-control border-2 border-primary" id="nome" name="nome" value="">
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label font-weight-bold">Preço:</label>
                    <input type="text" class="form-control border-2 border-primary" id="preco" name="preco" value="">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label font-weight-bold">Tipo:</label>
                    <input type="text" class="form-control border-2 border-primary" id="tipo" name="tipo" value="">
                </div>
                <div class="mb-3">
                    <label for="data_fabricacao" class="form-label font-weight-bold">Data de Fabricação:</label>
                    <input type="date" class="form-control border-2 border-primary" id="data_fabricacao" name="data_fabricacao" value="">
                </div>
                <div class="mb-3">
                    <label for="data_validade" class="form-label font-weight-bold">Data de Validade:</label>
                    <input type="date" class="form-control border-2 border-primary" id="data_validade" name="data_validade" value="">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="products.php" class="btn btn-warning">Cancelar</a>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
