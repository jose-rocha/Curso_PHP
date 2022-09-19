<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
// tgfrqdgph2lohrvld3onpl1h1u
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1: 1;
echo '<br>' . $_SESSION['contador'];

// regerando a sessão.
if ($_SESSION['contador'] % 5 === 0) {
  session_regenerate_id();
}

if ($_SESSION['contador'] >= 15) {
  session_destroy();
}