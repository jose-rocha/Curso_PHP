<?php
echo 'Carregando: include_arquivo.php <br>';

$variavel = 'Estou definida';

// function soma($a, $b) {
//   return $a + $b;
// }

if (!function_exists('soma')) {
  function soma($a, $b) {
    return $a + $b;
  }
}