<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($novoNome, $idade, $login) {
        // $this->nome = $novoNome;
        // $this->idade = $idade;
        parent::__construct($novoNome, $idade); // chamando o constructor de Pessoa.
        $this->login = $login;
    }

    public function apresentar() {
        // return "user: @{$this->login}, nome:{$this->nome}, {$this->idade} anos.";
        $login = "user: @{$this->login}, ";
        return $login . parent::apresentar(); // chamando a function apresentar de Pessoa.
    }
}