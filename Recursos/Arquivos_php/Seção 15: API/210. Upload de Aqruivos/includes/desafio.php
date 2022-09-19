<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');
ini_set('display_errors', 1);


$usuario = new Usuario('Marcos Edinaldo Leão', 36, 'marcos_edinaldo');
echo $usuario->apresentar();

unset($usuario);