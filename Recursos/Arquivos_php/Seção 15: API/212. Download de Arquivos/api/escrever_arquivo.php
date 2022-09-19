<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); // 'w' --> write ou escrever
fwrite($arquivo, "Valor inicial\n");

$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo conteúdo'); // sobrescrevendo o conteúdo.
fclose($arquivo);


$arquivo = fopen('teste.txt', 'a'); // 'a' --> append ou depois
fwrite($arquivo, "\nAdicionando depois com o append,\n");
fwrite($arquivo, "Adicionado de novo na próxima linha com o append");
fclose($arquivo);

ini_set("display_errors", 1);
$arquivo = fopen('teste.txt', 'x'); /* 'x' para arquivo que não existe,
no caso aqui existe, por isso o warning */

