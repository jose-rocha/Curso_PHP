<div class="titulo">Argumentos e Retorno</div>

<?php
$name = 'José';
function obterMensagem() {
  global $name;
  return "Seja bem vindo $name";
}


echo obterMensagem();
$message = obterMensagem();
echo "<br>";

echo $message;
echo "<br>";

var_dump(obterMensagem());

echo "<br>";

function obterMensagemComNome($nome) {
  return "Bem vindo $nome!";
}

echo obterMensagemComNome('leão');

echo "<br>";

echo obterMensagemComNome('Rocha');

echo "<br>";

function soma($a, $b) {
  return $a + $b;
}

$x = 4;
$y = 5;
echo 'O resultado é: ' . soma($x, $y) . '<br>';
echo 'O resultado é: ' . soma(5, 5) . '<br>';
echo 'O resultado é: ' . soma(10, 5) . '<br>';

echo '<hr>';


function trocaValor($a, $novoValor) {
  $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo  $variavel;

function trocaValorDeVerdade(&$a, $novoValor) {
  // ---> &$a, $novoValor;
  $a = $novoValor;
}

trocaValorDeVerdade($variavel, 500);
echo '<br>', $variavel;

// echo '<br>';
// echo "a quantidade de carcteres é : " . strlen(obterMensagem());

// $age = 31;
// $showValue = fn($numb) =>  "minha idade é $numb";

// echo $showValue($age);

// echo '<br>';

// $showValue2 = fn() => "minha idade é $age";

// echo $showValue2();