<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']); // limpando o cookie.
setcookie('usuario', ''); // setando o cookie para vázio.
header('Location: login.php');