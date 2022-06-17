<div class="titulo">Foreach</div>

<?php

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($array as $valor) {
  echo "$valor <br>";
}

echo "<hr>";

foreach ($array as $indice => $valor) {
  echo "$indice => $valor <br>";
}

$matrix = [
  ['a', 'e', 'i', 'o', 'u'],
  ['b', 'c', 'd']
];

foreach ($matrix as $linhas) {
  // echo "$linhas <br>";
  foreach($linhas as $letra) {
    echo "$letra <br>";
  }
  echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
print_r($numeros);

foreach ($numeros as &$numero) {
  //  &$numero altera o valor do array original.
  $numero *=2;
  echo "<span> $numero </span><br>";
}

print_r($numeros);