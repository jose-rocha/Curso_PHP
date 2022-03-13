<div class="titulo">Atribuições</div>

<?php
  $title = 'Atribuições';

  10 + 10; // + infix ou entre

  $numero = 10;
  echo $numero;
  $numero = $numero - 3;
  echo '<br>' . $numero;
  $numero = $numero + 1.5;
  echo '<br>' . $numero;
  $numero--; // posfix $numero = $numero - 1 addiional asignment ou atribuição adicional
  --$numero; // prefix $numero = $numero - 1 addiional asignment ou atribuição adicional
  echo '<br>' . $numero;
  $numero++; // posfix $numero = $numero + 1 addiional asignment ou atribuição adicional
  ++$numero; // prefix $numero = $numero + 1 addiional asignment ou atribuição adicional
  echo '<br>' . $numero;
  echo '<hr>';

  $numero = 20;

  echo ' $numero é = ' . $numero;
  $numero -= 5;
  echo '<br> agora $numero -= 5; é = ' . $numero;
  $numero += 5;
  echo '<br> agora $numero += 10; é = ' . $numero;
  $numero *= 10;
  echo '<br> agora $numero *= 10; é = ' . $numero;
  $numero /= 2;
  echo '<br> agora $numero /= 2; é = ' . $numero;
  $numero %= 6;
  echo '<br> agora $numero %= 6; é = ' . $numero; // % resto da divisão
  $numero **= 4;
  echo '<br> agora $numero **= 4; é = ' . $numero; // ** elevado

  echo '<br>' . $numero;
  $numero .= 4; // isso é uma concatenação!.
  echo '<br> agora $numero .= 4; é ' . $numero;

  $texto = 'esse é um texto';
  echo '<br>' . $texto;
  $texto = $texto . ', outro texto concatenado';

  echo '<br>' . $texto;
  $texto .= ', outro jeito de concatenar.';

  echo $texto;

  // $variavelInexistente = 'Valor existente';
  echo '<br>' . $variavelInexistente;
  $valor = $variavelInexistente ?? 'Caso a variável não tenha valor esse texto que vai aparacer!' ;
  echo '<br>' . $valor;

  echo '<br>';
  echo 'O valor de $variavelInexistente é ', var_dump($variavelInexistente);












  