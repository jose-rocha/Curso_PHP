<div class="titulo">Array</div>

<?php
  $lista = array(1, 2, 3.4, 'texto');
  echo $lista . "<br>";
  var_dump($lista);
  echo "<br>";
  print_r($lista);

  $lista[0] = 1234;
  print_r($lista);

  echo "<br>" . $lista[0];
  echo "<br>" . $lista[1];
  echo "<br>" . $lista[2];
  echo '<br>';
  var_dump($lista[4]);

  $texto = 'Esse é um texto de teste';
  echo "<br>" . $texto[0];
  echo "<br>" . $texto[2];
  echo "<br>" . $texto[0];
  echo '<br>' . mb_substr($texto, 10, 2); // o mb_substr não estar rolando com a extensão php server só com o XAMPP
  

