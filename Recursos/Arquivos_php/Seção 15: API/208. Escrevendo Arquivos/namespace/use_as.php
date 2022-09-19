<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
  return $a . $b;
}

class Classe {
  public $var;

  function func() {
    echo __NAMESPACE__ . ' -> ' .
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
  }
}

echo \Nome\Bem\Grande\constante . '<br>';
use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;


echo "Função de concatenação:  " . soma(1, 2); // usando a função desse aqrquivo da linha 10 a 12,
//ou seja ao ivés de somado será concatenado;

echo '<br> Função de soma: ' . ctx\soma(1, 2); /* usando a função do aqrquivo use_as_arquivo.php,
 ou seja ao ivés de concatenado será somado; */

echo '<br>';
//use function Nome\Bem\Grande\soma; desse jeito gera conflito.
use function Nome\Bem\Grande\soma as somaReal; /* resolvendo conflito com alias, essa função é do arquivo
 use_as_arquivo.php */
echo '<br> Função de soma(5, 6) é = ' . somaReal(5, 6);

echo '<br>';
$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();