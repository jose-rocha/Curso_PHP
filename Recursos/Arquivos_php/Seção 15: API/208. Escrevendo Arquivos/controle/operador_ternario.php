<div class="titulo">Operador Ternário</div>

<?php
  $idade = 31;
  $status;

  if ($idade >= 18) {
    echo "Maior de idade";
  } else {
    echo "Menor de idade";
  }

  echo "$status <br>";
  
  $idade = 17;
  $maiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
  $status = $idade >= 18 ? $maiorIdade : 'Menor de idade';

  echo $status;
