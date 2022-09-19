<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagem() {
  $name = 'José Rocha';
  echo 'Olá, <br>';
  echo "meu nome é $name <br>";
}

imprimirMensagem();

echo "<hr>";

$variavel = 1;

function trocaValor() {
  $variavel = 2;
  echo "Durante a função: $variavel <br>";
}

echo "Antes da execução da função: $variavel <br>";

trocaValor();

echo "Depois da execução da função: $variavel <br>";

echo "<hr>";

function trocaValorDeVerdade() {
  global $variavel; //acessando a váriavel no escopo global.
  $variavel = 3;
  
  echo "Durante a função: $variavel usando o global <br>";
}

echo "Antes da execução da função: $variavel <br>";

trocaValorDeVerdade();

echo "Depois da execução da função: $variavel alterado com o global <br>";

var_dump(trocaValorDeVerdade());