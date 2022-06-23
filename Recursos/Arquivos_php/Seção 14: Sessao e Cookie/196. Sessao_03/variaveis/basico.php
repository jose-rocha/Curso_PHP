<div class="titulo">Variáveis</div>

<?php
  $numeroA = 13;
  echo 'O valor de numeroA é ' . $numeroA, '<br>';
  var_dump($numeroA);

  echo '<br>';
  $a = 3;
  $b = 16;
  $somaDosNumeros = $a + $b;
  echo 'a soma de $a + $b é = ' . $somaDosNumeros;

  echo '<br>';
  echo '$somaDosNumeros está setado? ' . isset($somaDosNumeros);

  unset($somaDosNumeros);
  echo '<br>';
  echo '$somaDosNumeros é? ', var_dump($somaDosNumeros);

  $variavel = 10;
  echo '<br> o valor de $variavel é ' . $variavel;

  $variavel = "Agora sou uma string!";
  echo '<br> O valor de $variavel agora é --> ' . $variavel;

  # Nomes de variáveis
  $var = 'valida';
  $var2 = 'valida';
  $var3 = 'valida';
  $_var_4 = 'valida';
  $vâr5 = 'valida'; # porém não aconselhada
  // $6var = 'invalida';
  // $%var7 = 'invalida';
  // $var8% = 'invalida';

  echo '<br>';
  var_dump($_SERVER['HTTP_HOST']);
  echo '<br>';

  var_dump($_SERVER['HTTP_SEC_CH_UA_PLATFORM']);
  echo '<br>';

  var_dump($_SERVER["SERVER_SOFTWARE"]);
  echo '<br>';

  var_dump($_SERVER['REQUEST_TIME']);
  echo '<br>';
  echo '<br>';
  var_dump($_SERVER);