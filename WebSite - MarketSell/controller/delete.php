<?php

    include_once('config.php');
    session_start();

    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) 
    {
        header('Location: ../views/login.php');
        exit;
    }

    if(isset($_GET['codigo'])) 
    {
        $codigo = $_GET['codigo'];

        $query = "DELETE FROM products WHERE id = ?";
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