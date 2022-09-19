<div class="titulo">Argumentos Padrão</div> 

<?php
  function saudacao($nome = 'Senhor', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome! <br>";
  }

  echo saudacao();
  echo saudacao(null);
  echo saudacao(null, null);
  echo saudacao('Mestre', 'Supremo');

  echo '<hr>';

function anotarPedido($comida, $bebida = 'Água') {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido('Burguer King');
anotarPedido('Pizza', 'Refrigerante');

echo '<hr>';

function anotarPedido2($bebida = 'suco', $comida) {
  echo "Para beber: $bebida <br>";
  echo "Para comer: $comida <br>";
}

anotarPedido2('Limonada','Sanduiche');
/* anotarPedido2('Sanduiche'); se colocar só um valor, como o primeiro parâmetro
foi passado o valor fixo $bebida = 'suco' se eu passar anotarPedido2('Sanduiche');
ele não mostrar nada. */
