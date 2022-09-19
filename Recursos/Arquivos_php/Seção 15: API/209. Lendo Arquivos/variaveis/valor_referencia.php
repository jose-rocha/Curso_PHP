<div class="titulo">Valor vs Rferência</div>

<?php
  $variavel = 'valor inicial';
  echo 'O valor de  $variavel é ', $variavel . '.';

  echo '<br>';
  echo '<br> "Atribuição por valor"';


  //Atribuição por valor
  $variavelValor = $variavel;
  echo '<br> O valor de  $variavelValor é = ', $variavelValor . '.';
  $variavelValor = 'novo valor';

  echo '<br>';

  echo '<br> O valor de  $variavelValor agora é = ', $variavelValor . '.';
  echo '<br> E o valor de  $variavel continua sendo = ', $variavel . '.';

  echo '<br>';
  echo '<br> "Atribuição por referência"';

  //Atribuição por referência
  $variavelReferencia = &$variavel;
  echo '<br> o valor de $variavel continua sendo = ', $variavel, ' e o valor de $variavelReferencia é = ', $variavelReferencia;
  $variavelReferencia = 'mesma referência';

  echo '<br>';
  echo '<br> agora o valor $variavel é = ', $variavel, ' e o valor de $variavelReferencia = ', $variavelReferencia;