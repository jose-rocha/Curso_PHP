<div class="titulo">Constantes</div>

<?php
  define('TAXA_DE_JUROS', 5.9);

  echo TAXA_DE_JUROS;
  echo '<br>' . $TAXA_DE_JUROS . '!'; // constantes não funcoionam com o sinal de variavel tradicional $


  const NOVA_TAXA = 2.5; // pode ser usada igual no JS só que em caixa alta.
  echo '<br>' . NOVA_TAXA;

  $valorVariavel = 2.8;
  define('NOViSSIMA_TAXA', $valorVariavel); //dessa forma podemos atribuir o valor de uma constante com outra variável.
  echo "<br>" . NOViSSIMA_TAXA;

  // const NOVISSIMA_TAXA2 = $valorVariavel; ////dessa forma não podemos atribuir o valor de uma constante com outra variável.

  echo '<br> Versão do PHP: ' . PHP_VERSION; // constante do próprio php
  echo '<br>' . PHP_INT_MAX;
  
  echo '<br> Linha: ' . __LINE__;
  echo '<br> camiho do atual arquivo: ' . __FILE__;
  echo '<br>';
  echo '<br> camiho do atual diretório: ' . __DIR__;