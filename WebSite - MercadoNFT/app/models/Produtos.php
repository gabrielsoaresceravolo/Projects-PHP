<?php

    class Sobremesa 
    {
        private $id;
        private $nome;
        private $autor;
        private $tamanho;
        private $preco;

        // Construtor
        public function __construct($id, $nome, $autor, $tamanho, $preco) 
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->autor = $autor;
            $this->tamanho = $tamanho;
            $this->preco = $preco;
        }

        // ==================== Getters ====================
        
        public function getId() 
        {
            return $this->id;
        }

        public function getNome() 
        {
            return $this->nome;
        }

        public function getautor()
        {
            return $this->autor;
        }

        public function getPreco() 
        {
            return $this->preco;
        }

        public function getTamanho()
        {
            return $this->tamanho;
        }

        // ==================== Setters ====================

        public function setId($id) 
        {
            $this->id = $id;
        }

        public function setNome($nome) 
        {
            $this->nome = $nome;
        }

        public function setautor()
        {
            $this->autor = $autor;
        }

        public function setPreco($preco) 
        {
            $this->preco = $preco;
        }

        public function setTamanho($tamanho)
        {
            $this->tamanho = $tamanho;
        }
    }

?>