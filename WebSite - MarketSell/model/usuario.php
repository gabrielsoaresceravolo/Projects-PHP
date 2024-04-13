<?php

    require_once("../controller/config.php");

    class User 
    {
        private $nome;
        private $email;
        private $senha;
        private $dataCriacao;

        public function __construct($nome, $email, $senha) 
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->dataCriacao = date('Y-m-d H:i:s');
        }

        // ==================================================================================
        // Proteção contra XSS implementada

        public function setNome($nome) 
        {
            $this->nome = htmlspecialchars($nome, ENT_QUOTES);
        }

        public function setEmail($email) 
        {
            $this->email = htmlspecialchars($nome, ENT_QUOTES);
        }

        public function setSenha($senha) 
        {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        }

        public function setDataCriacao() 
        {
            $this->dataCriacao = date('Y-m-d H:i:s');
        }

        // ==================================================================================

        public function getNome() 
        {
            return $this->nome;
        }

        public function getEmail() 
        {
            return $this->email;
        }

        public function getSenha() 
        {
            return $this->senha;
        }
        
        // ==================================================================================

        public function save()
        {
            global $conn;

            $query = "INSERT INTO produtos (nome, preco, tipo, data_fabricacao, data_validade, data_criacao) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = prepareQuery($conn, $query, [$this->nome, $this->preco, $this->tipo, $this->dataFabricacao, $this->dataValidade, $this->dataCriacao]);

            if ($stmt) 
            {
                return true;
            } 
            else 
            {
                return false;
            }
        }

    }

?>
