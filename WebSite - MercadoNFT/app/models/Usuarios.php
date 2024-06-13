<?php

class Usuarios 
{
    private $id;
    private $nome;
    private $email;

    // Construtor
    public function __construct($id, $nome, $email) 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
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

    public function getemail() 
    {
        return $this->email;
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

    public function setemail($email) 
    {
        $this->email = $email;
    }
}