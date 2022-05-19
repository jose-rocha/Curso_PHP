<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1); // para mostrar os erros.

include('include_once_arquivo.php');
// include('include_once_arquivo.php');

echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.<br>";

