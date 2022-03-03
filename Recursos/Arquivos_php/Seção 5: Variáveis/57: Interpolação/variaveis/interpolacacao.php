<div class="titulo">Interpolação</div>


<?php
  $numero = 10;
  echo $numero;
  echo '<br> $numero'; // '' aspas simples a interpolação não funciona.
  echo "<br> $numero"; // "" aspas duplas a interpolação  funciona.

  $texto = "A sua nota é $numero";

  echo "<br> $texto!";

  $objeto = 'caneta';

  echo "<br> eu tenho 5 $objetos"; // não funciona com letras 
  echo "<br> eu tenho 5 {$objeto}s"; // interpolação com chaves
  echo "<br> eu tinha 5 { $objeto} e agora tenho 3 {$objeto }";