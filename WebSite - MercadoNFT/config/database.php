<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'mercado_nft';
    private $username = 'root';
    private $password = '';
    public $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->mysqli->connect_error) {
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
        $stmt = $this->mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);
        return $stmt->execute();
    }

    public function atualizar($id, $nome, $email, $senha)
    {
        $stmt = $this->mysqli->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $stmt->bind_param("sssi", $nome, $email, $senha, $id);
        return $stmt->execute();
    }

    public function remover($id)
    {
        $stmt = $this->mysqli->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

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

// Uso das classes
$database = new Database();
$usuario = new Usuario($database->mysqli);
$produto = new Produto($database->mysqli);

?>
