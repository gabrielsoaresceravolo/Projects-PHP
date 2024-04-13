<?php

    include_once('../model/produto.php');
    include_once('../controller/config.php');

    session_start();

    if (isset($_GET['codigo'])) 
    {
        $codigo = $_GET['codigo'];

        $query = "DELETE FROM produtos WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $codigo);
        $stmt->execute();

        header('Location: ../views/products.php');
        exit;
    } 
    else 
    {
        header('Location: ../views/products.php');
        exit;
    }
?>
