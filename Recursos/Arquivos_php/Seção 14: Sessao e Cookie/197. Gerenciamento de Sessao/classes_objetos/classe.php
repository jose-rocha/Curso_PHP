<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
  // atributos
  public $name = 'José Rocha';
  public $age = 31;
  public $profession = 'Software Engineer';

  // método
  public function apresentar() {
    return "Nome: {$this->name}, <br> Idade: {$this->age},
    <br> Profissão: {$this->profession}";
  }
}

$c1 = new Cliente(); // lembrar de colocar () pq new Cliente é um método.
echo $c1->name, '<br>'; // nome antes de ser alterado.
$c1->name = 'José Leão Rocha'; // alterando o nome.
$c1->age = '30'; // alterando a idade.

echo $c1->apresentar();

echo '<hr>';

$c2 = new Cliente();
$c2->name = 'Elisa Silva';
$c2->age = 42;
$c2->profession = 'Cabeleleiro';

 echo $c2->apresentar();

echo '<hr>';

