<?php
session_start();
if (!$_SESSION['usuario']) {
  header('Location: login.php');
}
//  se não existir usuário logado redirecionar para login.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/exercicio.css">
    <link rel="icon" href="./images/mascotePhp.jpeg" type="image/x-icon">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?> </span>

        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" class="voltar">Voltar</a>

        <a href="logout.php" class="vermelho" >Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
              // include($_GET['dir'].'/'.$_GET['file'].'.php');
              include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>   
</body>
</html>
