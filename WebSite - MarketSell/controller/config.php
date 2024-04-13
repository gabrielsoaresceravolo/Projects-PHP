<?php

    $db_host = 'localhost';     // Host do Banco
    $db_username = 'root';      // Usuário do Banco
    $db_password = '';          // Senha do Banco
    $db_name = 'marketsell';    // Nome do Banco

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if($conn->connect_errno) 
    {
        echo "<script>console.log('Erro ao conectar ao banco de dados!');</script>";
        exit();
    } 
    else 
    {
        echo "<script>console.log('Conectado ao banco de dados!');</script>";
    }

    // Função para preparar consultas SQL usando bind_param
    function prepareQuery($conn, $query, $params) 
    {
        $stmt = $conn->prepare($query);

        if ($stmt === false) 
        {
            echo "<script>console.log('Erro na preparação da consulta!');</script>";
            return false;
        }
        
        // Verifica se os parâmetros foram passados
        if (!empty($params)) 
        {
            // Obtém os tipos de dados dos parâmetros
            $types = "";
            foreach ($params as $param) 
            {
                if (is_int($param)) 
                {
                    $types .= "i";
                } 
                else if (is_float($param)) 
                {
                    $types .= "d";
                } 
                else if (is_string($param)) 
                {
                    $types .= "s";
                } 
                else 
                {
                    $types .= "b";
                }
            }
            
            $bindParams = array_merge([$types], $params);

            call_user_func_array([$stmt, 'bind_param'], $bindParams);
        }
        
        if ($stmt->execute()) 
        {
            // Limpa o resultado para poder executar uma nova consulta
            $stmt->store_result();
            return $stmt;
        } 
        else 
        {
            echo "<script>console.log('Erro ao executar a consulta!');</script>";
            return false;
        }
    }

?>
