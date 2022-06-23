<?php
    session_start();

    $email = $_POST['emailDigitado'];
    $senha = $_POST['senhaDigitada'];

    if ($email) {
        $usuarios = [
                [
                    "nome" => "José Rocha",
                    "email" => "jose.rocha@com.br",
                    "senha" => '123456',
                ],
                [
                    "nome" => "Outro Aluno",
                    "email" => "outro@email.com.br",
                    "senha" => "654321",
                ],
        ];

        foreach ($usuarios as $usuario) {
            $emailValido = $email === $usuario["email"];
            $senhaValida = $senha === $usuario["senha"];

            if ($emailValido && $senhaValida) {
                $_SESSION['erros'] = null; // limpando os erros.
                $_SESSION['usuario'] = $usuario['nome'];
                header('Location: index.php');
            }
        }

        if (!$_SESSION['usuario']) {
	        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
        }

//        sleep(3);
//	    $_SESSION['erros'] = null;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="./images/mascotePhp.jpeg">
    <title>Projeto Login 02</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Indentifique-se</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p> <?= $erro ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="emailDigitado">E-mail</label>
                    <input type="email" name="emailDigitado" id="emailDigitado">
                </div>
                <div>
                    <label for="senhaDigitada">Senha</label>
                    <input type="password" name="senhaDigitada" id="senhaDigitada">
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('d/m/Y'); ?>
    </footer>   
    
     <script >
         const erroMessage = document.querySelector('.erros');

         setInterval(() => {
             // erroMessage.style.display = 'none';
             erroMessage.remove();
         }, 3000);

     </script>
</body>
</html>


