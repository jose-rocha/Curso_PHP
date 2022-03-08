<div class="titulo">Tipo Aritméticas</div>

<?php
  echo 1 + 1, '<br>';

  var_dump(1 + 1);
  echo '<br>';
  var_dump(1 + 1.0); // tipo da variável
  echo '<br>';
  echo 1 + 2.5, '<br>';
  echo 10 - 2, '<br>';
  echo 2 * 5, '<br>';
  echo 7 / 4, '<br>'; // 1.75
  echo intdiv(7, 4), '<br>'; // 1 
  echo round(7 / 4), '<br>'; // 2
  echo 7 % 4, '<br>';
  echo 7 % 2 , '<br>';
  echo 8 % 2, '<br>';
  echo 7 / 0, '<br>'; // INFINITO
  // echo intdiv(7, 0), '<br>'; // erro!
  echo 4 ** 2, '<br>'; // 16

  //  Precedência de operadores:
  //  () => ** => / * % => + -
  echo '<p>Precedência</p>';
  echo 2 + 3 * 4, '<br>';
  echo (2 + 3) * 4, '<br>'; // 5 ^ 4 = 20
  echo 2 + 3 * 4 ** 2, '<br>'; // 4 ^ 2 * 3 + 2 = 50
  echo ((2 + 3) * 4) ** 2; // 2 + 3 * 4 ^ 2 = 400