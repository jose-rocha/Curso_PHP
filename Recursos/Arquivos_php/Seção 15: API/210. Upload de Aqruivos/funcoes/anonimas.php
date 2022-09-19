<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b) {
  return $a + $b;
};

echo $soma(5, 6) . '<br>';

function executar($a, $b, $op, $funcao) {
  $resultado = $funcao($a, $b);
  echo "$a $op $b = $resultado <br>";
}

executar(2, 5, '+', $soma);

$multiplicacao = function($a, $b) {
  return $a * $b;
};

executar(6, 2, '*', $multiplicacao);

 $divisao = function($a, $b) {
  return $a / $b;
};


executar(9, 3, '/', $divisao);