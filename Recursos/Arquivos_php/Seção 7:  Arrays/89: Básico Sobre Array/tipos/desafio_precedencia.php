<div class="titulo">Desafio Precedência</div>

<?php
  echo '<p>1. Qual o valor será impresso?</p>';
  echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // 

  echo '<p>2. Qual expressão imprime o valor 100?</p>';
  echo 'a). ', (1 + 2) * 20 - 15; // (1 + 2) * 20 = 60 fimm, 60 - 15 = 45.
  echo ' b). ', 4 * 5 ** 2; // 5 ^ 2 = 25 fim, 25 * 4 = 100.
  echo ' c). ', 2 ** 3 ** 4 / 1e25 ;
  echo ' d). ', 3 + (3 * 8) / 2 - 3; // 3 * 8 = 24 fim, 24 / 2 - 3 = 9 fim, 9  + 3 = 12.

  echo '<p style="color: green;">"b" é a reposta certa!</p>';