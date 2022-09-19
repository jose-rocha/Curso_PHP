<div class="titulo">Rquired & Return</div>

<?php
$valorRetorno = require('return_usado.php');

echo "valor retorno: $valorRetorno; <br>";
echo "valor variavelRetornada: $variavelRetornada;";

echo __DIR__ . '<br>'; // mostra o  caminho do diretório.

// $valorRetorno2 = require(__DIR__. '/return_nao_usado.php');
$valorRetorno2 = include(__DIR__. '/return_nao_usado.php');
var_dump($valorRetorno2);

echo '<br>';

echo "$valorRetorno2 <br>"; /* esse aqui vai retornar 1 pq o arquivo existe,
se passar um caminho com o nome errado vaiser false logo desaparece. */
echo "$variavelDeclarada <br>";
