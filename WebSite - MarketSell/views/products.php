<?php
    include_once('../controller/config.php');
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) 
    {
        header('Location: login.php');
        exit;
    }

    // Definir a consulta SQL para buscar produtos
    if (!empty($_GET['search'])) 
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM products WHERE nome LIKE '%$data%' ORDER BY id DESC";
    } 
    else 
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";
    }

    // Consulta SQL
    $result_produtos = $conn->query($sql);
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

                    // Verificar se a consulta retornou resultados
                    if ($result_produtos !== null) 
                    {
                        if ($result_produtos->num_rows > 0) 
                        {
                            // RESULTADOS DA CONSULTA
                            while ($product_data = $result_produtos->fetch_assoc()) 
                            {
                                echo "<tr>";
                                echo "<td>" . $product_data['id'] . "</td>";
                                echo "<td>" . $product_data['nome'] . "</td>";
                                echo "<td>" . $product_data['preco'] . "</td>";
                                echo "<td>" . $product_data['tipo'] . "</td>";
                                echo "<td>" . $product_data['data_fabricacao'] . "</td>";
                                echo "<td>" . $product_data['data_validade'] . "</td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-primary' href='edit.php?id=" . $product_data['id'] . "' title='Editar'>
                                        <i class='fas fa-pencil-alt'></i>
                                    </a> 
                                    <a class='btn btn-sm btn-danger' href='../controller/delete.php?codigo=" . $product_data['id'] . "' title='Excluir'>
                                        <i class='fas fa-trash-alt'></i>
                                    </a> 
                                </td>";
                            }
                        } 
                        else 
                        {
                            // NÃO HÁ RESULTADOS
                            echo "<tr><td colspan='7'>Nenhum produto encontrado.</td></tr>";
                        }
                    }
                    else 
                    {
                        // ERRO
                        echo "<tr><td colspan='7'>Erro ao executar a consulta.</td></tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+6Z/Zi6eewjoQo6m6Bfz0tqc9ii5+DkLXJ/ca5x" crossorigin="anonymous"></script>

    </body>
</html>
