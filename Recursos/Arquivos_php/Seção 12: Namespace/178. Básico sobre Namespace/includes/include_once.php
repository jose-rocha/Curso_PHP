<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1); // para mostrar os erros.

include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Variável = '{$variavel}' <br>";  // Variável = 'Estou definida'.
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}' <br>"; // Variável = 'Variável Alterada'

include('include_once_arquivo.php');
echo "Variável = '{$variavel}' <br>"; // Variável = 'Estou definida'
$variavel = "Variável Alterada";
echo "Variável = '{$variavel}' <br>";  // Variável = 'Variável Alterada'

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}' <br>"; // Variável = 'Variável Alterada'

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}' <br>"; // Variável = 'Variável Alterada'

