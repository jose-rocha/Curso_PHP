<div class="titulo">Desafio Palindromo</div>


<?php
  function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
      if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
        return 'Não';
      }
    }
    return 'Sim';
  }

  echo palindromo('arara') . ', é um palindromo!<br>';
  echo palindromo('ana') . ', é um palindromo!<br>';
  echo palindromo('bola') . ' é um palindromo!<br>';
  echo palindromo('arara') . ', é um palindromo!<br>';

  echo '<hr>';


  function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
  }

  echo palindromo('arara') . ', é um palindromo!<br>';
  echo palindromo('ana') . ', é um palindromo!<br>';
  echo palindromo('bola') . ' é um palindromo!<br>';
  echo palindromo('arara') . ', é um palindromo!<br>';