<?php

    class Produto 
    {
        private $nome;
        private $preco;
        private $tipo;
        private $dataFabricacao;
        private $dataValidade;
        private $dataCriacao;

        public function __construct($nome, $preco, $tipo, $dataFabricacao, $dataValidade) 
        {
            $this->setNome($nome);
            $this->setPreco($preco);
            $this->setTipo($tipo);
            $this->setDataFabricacao($dataFabricacao);
            $this->setDataValidade($dataValidade);
            $this->setDataCriacao();
        }

        // ==================================================================================
        // Proteção contra XSS implementada

        public function setNome($nome) 
        {
            $this->nome = htmlspecialchars($nome, ENT_QUOTES);
        }

        public function setPreco($preco) 
        {
            $this->preco = htmlspecialchars($preco, ENT_QUOTES);
        }

        public function setTipo($tipo) 
        {
            $this->tipo = htmlspecialchars($tipo, ENT_QUOTES);
        }

        public function setDataFabricacao($dataFabricacao) 
        {
            $this->dataFabricacao = $dataFabricacao;
        }

        public function setDataValidade($dataValidade) 
        {
            $this->dataValidade = $dataValidade;
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

        public function getPreco() 
        {
            return $this->preco;
        }

        public function getTipo() 
        {
            return $this->tipo;
        }

        public function getDataFabricacao() 
        {
            return $this->dataFabricacao;
        }

        public function getDataValidade() 
        {
            return $this->dataValidade;
        }

        public function getDataCriacao() 
        {
            return $this->dataCriacao;
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

        public function editar($id, $nome, $preco, $tipo, $dataFabricacao, $dataValidade)
        {
            global $conn;

            $query = "UPDATE produtos SET nome = ?, preco = ?, tipo = ?, data_fabricacao = ?, data_validade = ? WHERE id = ?";
            $stmt = prepareQuery($conn, $query, [$nome, $preco, $tipo, $dataFabricacao, $dataValidade, $id]);

            if ($stmt) 
            {
                return true;
            } 
            else 
            {
                return false;
            }
        }

        public function excluir($id) 
        {
            global $conn;

            $query = "DELETE FROM produtos WHERE id = ?";
            $stmt = prepareQuery($conn, $query, [$id]);

            return $stmt ? true : false;
        }
    }

?>
