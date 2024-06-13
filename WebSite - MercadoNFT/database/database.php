<?php

require('config.php');

class Database
{
    private $mysqli;

    public function __construct()
    {
        global $config;

        $this->mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);

        if ($this->mysqli->connect_error) 
        {
            die("Erro na conexão com o banco de dados: " . $this->mysqli->connect_error);
        }
    }
}

class Usuario
{
    private $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function buscar($id)
    {
        $stmt = $this->mysqli->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function inserir($nome, $email, $senha)
    {
        $hashed_senha = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $this->mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $hashed_senha);
        return $stmt->execute();
    }


    public function atualizar($id, $nome, $email, $senha)
    {
        $hashed_senha = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $this->mysqli->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $stmt->bind_param("sssi", $nome, $email, $hashed_senha, $id);
        return $stmt->execute();
    }

    public function remover($id)
    {
        $stmt = $this->mysqli->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // =================================================================================================================

    private function emailCadastrado($email)
    {
        $stmt = $this->mysqli->prepare("SELECT email FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    private function Login($email)
    {
        $stmt = $this->mysqli->prepare("SELECT email FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}

// =====================================================================================================================

class Produto
{
    private $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function buscar($id)
    {
        $stmt = $this->mysqli->prepare("SELECT * FROM produtos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function inserir($nome, $descricao, $preco)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $nome, $descricao, $preco);
        return $stmt->execute();
    }

    public function atualizar($id, $nome, $descricao, $preco)
    {
        $stmt = $this->mysqli->prepare("UPDATE produtos SET nome = ?, descricao = ?, preco = ? WHERE id = ?");
        $stmt->bind_param("ssdi", $nome, $descricao, $preco, $id);
        return $stmt->execute();
    }

    public function remover($id)
    {
        $stmt = $this->mysqli->prepare("DELETE FROM produtos WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

// =====================================================================================================================

$database = new Database();
$usuario = new Usuario($database->mysqli);
$produto = new Produto($database->mysqli);

?>
