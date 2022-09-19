<div class="titulo">Constrtutor & Destrutor</div>

<?php

class Pessoa {
  public $nome;
  public $idade;

  function __construct($novoNome, $idade = 18) {
    echo 'Construtor invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $idade;
  }

  function __destruct() {
    echo 'E morreu!';
  }

  public function apresentar() {
    return "{$this->nome}, {$this->idade} anos.<br>";
  }
}

// $pessoa = new Pessoa(); com o construct tem que passar os parâmetros.
$pessoaA = new Pessoa('José Rocha', 31);
echo $pessoaA->apresentar();

unset($pessoaA); // Exibe "E morreu!"

echo '<hr>';

$pessoaB = new Pessoa('Manoel da Silva', 45);
echo $pessoaB->apresentar();

$pessoaB = null; // Exibe "E morreu!"