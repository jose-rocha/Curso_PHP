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
    <link rel="icon" href="./images/mascotePhp.jpeg">
    <title>Atribuições</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios </h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <nav class="modulos">
            <div class="modulo verde">
              <h3>Básico</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=basico&file=ola">
                    Olá PHP
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=basico&file=html">
                    Integração HTML
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=basico&file=css">
                    Integração CSS
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=basico&file=desafio">
                    Desafio PHP
                  </a>
                </li>
              </ul>
            </div>
            <div class="modulo vermelho">
              <h3>Tipos</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=tipos&file=int">
                    Tipo Inteiro
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=float">
                    Tipo Float
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=aritmeticas">
                    Op. Aritméticas
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                    Desafio Precedência
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=desafio_string">
                    Desafio String
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=boolean">
                    Tipo Booleano
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tipos&file=conversoes">
                    Conversões
                  </a>
                </li>
              </ul>
            </div>
            <div class="modulo azul">
              <h3>Tipos</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=basico">
                    Variáveis
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                    Desafio Equação
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                    Atribuições
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=interpolacacao">
                    Interpolação
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>   
    
    <!-- <script src="javascript/app.js"></script> -->
</body>
</html>
