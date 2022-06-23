<div class="titulo">Try/Catch</div>

<?php
//    echo 7 / 0; desse jeito gera erro.
//echo  intdiv(7, 0); desse jeito gera erro.

try {
//  echo intdiv(7, 2);
  echo intdiv(7, 0); // vai entrar no catch pq 7 está sendo divido por 0.
} catch (Error $e)  {

    echo 'Teve um erro aqui. <br>';
}

try {
//  new Exception('Um erro muito estranho!');
 throw new Exception('Um erro muito estranho!');
  echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero <br>';
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
  echo 'Sempre executado por padrão! <br>';
}

echo 'Execução continua...';