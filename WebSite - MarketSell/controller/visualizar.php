<?php

    include_once('config.php');

    function visualizarProdutos($conn, $search = null) 
    {
        $sql = "SELECT * FROM produtos";

        if (!empty($search)) 
        {
            $search = $conn->real_escape_string($search);
            $sql .= " WHERE nome LIKE '%$search%'";
        }

        $sql .= " ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result) 
        {
            if ($result->num_rows > 0) 
            {
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['preco'] . "</td>";
                    echo "<td>" . $row['tipo'] . "</td>";
                    echo "<td>" . $row['data_fabricacao'] . "</td>";
                    echo "<td>" . $row['data_validade'] . "</td>";
                    echo "<td>
                        <a class='btn btn-sm btn-primary' href='../views/edit.php?id=" . $row['id'] . "' title='Editar'>
                            <i class='fas fa-pencil-alt'></i>
                        </a> 
                        <a class='btn btn-sm btn-danger' href='../controller/delete.php?codigo=" . $row['id'] . "' title='Excluir'>
                            <i class='fas fa-trash-alt'></i>
                        </a>
                    </td>";
                    echo "</tr>";
                }
            } 
            else 
            {
                echo "<tr><td colspan='7'>Nenhum produto encontrado.</td></tr>";
            }
        } 
        else 
        {
            echo "<tr><td colspan='7'>Erro ao executar a consulta: " . $conn->error . "</td></tr>";
        }
    }

?>
