<div class="titulo">Operadores Lógicos</div>

<?php
  echo "<p class='divisao'> V ou F </p>";
  var_dump(true);
  echo "<br>";
  var_dump(!true); // not

  echo "<p class='divisao'>Tabela verdade 'AND' (E) </p><hr>";
  var_dump(true && true);
  var_dump(true && false);
  var_dump(false && true);
  var_dump(false && false);

  echo '<br>';

  var_dump(true and true);
  var_dump(true and false);
  var_dump(false and true);
  var_dump(false and false);

  echo "<p class='divisao'>Tabela verdade 'OR' (OU) </p><hr>";
  var_dump(true || true);
  var_dump(true || false);
  var_dump(false || true);
  var_dump(false || false);

  echo '<br>';

  var_dump(true or true);
  var_dump(true or false);
  var_dump(false or true);
  var_dump(false or false);

  echo "<p class='divisao'>Tabela verdade 'XOR' (OU exclusivo) </p><hr>";
  var_dump(true xor true);
  var_dump(true xor false);
  var_dump(false xor true);
  var_dump(false xor false);

  echo '<br>';

  var_dump(true != true);
  var_dump(true != false);
  var_dump(false != true);
  var_dump(false != false);

  echo "<p class='divisao'>Exemplo</p><hr>";

  $idade = 60;
  $sexo = 'M';

  $pagouPrevidencia = true;
  
  $criterioHomem = $idade >= 65 && $sexo === 'M';
  $criterioMulher = $idade >= 60 && $sexo === 'F';
  $atingiuCriterio = $criterioHomem || $criterioMulher;
  $podeSeAposentar = $pagouPrevidencia &&  $atingiuCriterio ;

  if ($podeSeAposentar) {
    echo "tem $idade anos e o sexo é $sexo, pode se aposentar -> $sexo";
  } else if ($podeSeAposentar) {
    echo "tem $idade anos e o sexo é $sexo, pode se aposentar -> $sexo";
  } else {
    echo "tem $idade anos e o sexo é $sexo, precisa trabalhar mais uns anos.";
  }
