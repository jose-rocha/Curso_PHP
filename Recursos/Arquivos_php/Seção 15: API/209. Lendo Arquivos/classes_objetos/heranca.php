<div class="titulo">Herança</div>

<?php
class Pessoa {
  public $nome;
  public $idade;

  function __construct($novoNome, $idade) {
    $this->nome = $novoNome;
    $this->idade = $idade;
    echo 'Pessoa Criada! <br>';
  }

  function __destruct() {
    echo '<br> Pessoa diz: Tchau!!';
  }

  public function apresentar() {
    echo "Nome: {$this->nome}, {$this->idade} anos";
  }
}

// $person = new Pessoa('José Rocha', 31);
// echo $person->apresentar();

class Usuario extends Pessoa {
  public $login;

  function __construct($novoNome, $idade, $login) {
    // $this->nome = $novoNome;
    // $this->idade = $idade;
    parent::__construct($novoNome, $idade); // chamando o constructor de Pessoa.
    $this->login = $login;
    echo 'Usuário Criado! <br>';
  }

  function __destruct() {
    echo ' <br> Usuário diz: tchau!!';
    parent::__destruct(); // chamando o destructor de Pessoa.
  }

  public function apresentar() {
    // return "user: @{$this->login}, nome:{$this->nome}, {$this->idade} anos.";
    echo "user: @{$this->login}, ";
    parent::apresentar(); // chamando a function apresentar de Pessoa.
  }
}

$usuario = new Usuario('Marcos Edinaldo Leão', 36, 'marcos_edinaldo');
$usuario->apresentar();

unset($usuario);