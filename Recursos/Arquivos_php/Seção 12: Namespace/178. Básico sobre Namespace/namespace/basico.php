<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

use const outo_contexto\constante4;

echo __NAMESPACE__ . '<br>'; // namespace contexto

    const CONSTANTE1 = 123;
    define('contexto\constante2', 234); // outro jeito de definir constante.'
    define(__NAMESPACE__ . '\constante3', 345);
    define('outo_contexto\constante4', 456,);

    echo CONSTANTE1 . '<br>';
    echo constante2 . '<br>';
//    echo contexto\constante3 . '<br>'; // não funciona
    echo \contexto\constante3 . '<br>';
    echo constant(__NAMESPACE__ . '\constante3') . '<br>';
    echo constante4 . '<br>';

    function soma($a, $b) {
        return $a + $b;
    }

echo \contexto\soma(1, 3) . '<br>';
echo soma(1, 3) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto {$text} em {$str} <br>";
    return 1 . '<br> ';
}

echo strpos('Aluno', ' João');
echo  strpos('Texto genérico para busca', 'busca');
echo  \strpos('Texto genérico para busca', 'busca');