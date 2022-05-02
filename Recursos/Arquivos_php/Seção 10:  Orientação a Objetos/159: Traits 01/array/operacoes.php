<div class="titulo">Operações com Array</div>

<?php
  $dados = [
    "nome" => "José",
    "idade" => 31
  ];

  $dados2 = [
    "naturalidade" => "Quixeré"
  ];

  $dados2['Endereço'] = 'Rua A';

  $dadosCompletos = $dados + $dados2;
  print_r($dadosCompletos);

  echo '<br> $dadosCompletos é um array? ' . is_array($dadosCompletos);
  print_r($dadosCompletos);

  echo '<br> quantos dados tem em $dadosCompletos -> ' . count($dadosCompletos); //count mostra o tamanho dos dados que tem no array ou variáveis.

  echo '<br>';
  $indice = array_rand($dadosCompletos);
  echo "$indice = $dadosCompletos[$indice]";
  echo '<br>';

  echo "{$dadosCompletos['idade']}";
  echo "<br> ${dadosCompletos['idade']}";

  unset($dadosCompletos['nome']); // removendo a chave do array com o método unset
  echo '<br>';
  print_r($dadosCompletos);

  echo '<br>';


  unset($dadosCompletos); // removendo o array $dadosCompletos com o método unset
  echo '$dadosCompletos é: ' . var_dump($dadosCompletos);
  

  $impares = [1, 3, 5, 7, 9];
  $pares = [0, 2, 4, 6, 8];

  echo '<br>';


  $decimais = $pares + $impares;
  echo '<br>';
  print_r($decimais);

  $decimais = array_merge($pares, $impares); //array_merge para mesclar os dados.
  echo '<br>';
  print_r($decimais);


  
  sort($decimais); // sort é um método para ordenar os dados, porém ele não cria uma cópia do array, ele altera o array
  echo '<br>';
  print_r($decimais);
