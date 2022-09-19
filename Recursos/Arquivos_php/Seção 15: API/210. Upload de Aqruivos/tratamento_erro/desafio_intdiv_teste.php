<div class="titulo">Desafio intdiv</div>

<?php
require_once('desafio_intdiv.php');

use function \Aritimetica\intdiv;

try {
  echo intdiv(8, 3) . '<br.';
} catch (\Aritimetica\NaoInteiroEception $e) {
    echo  "Resultado não é um número inteiro. <br>";
}

try {
  echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero <br>';
}

$a = 8;
$b = 2;

echo "o resultado da divisão de $a / $b é = " . intdiv($a, $b) . '; <br>';
echo "o resultado da divisão de $a / $b é = " . \intdiv($a, $b) . '; <br>';