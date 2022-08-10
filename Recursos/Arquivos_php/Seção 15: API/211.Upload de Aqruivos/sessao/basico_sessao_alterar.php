<?php

session_start();
print_r($_SESSION);

?>

<?php
  $_SESSION['email'] = 'jose.modify@gmail.com';
?>

<p>
  <b>Nome: <?= $_SESSION['nome'] ?> </b> <br>
  <b>Email: <?= $_SESSION['email'] ?> </b>
</p>


<p>
  <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar a Sessão</a>
</p>