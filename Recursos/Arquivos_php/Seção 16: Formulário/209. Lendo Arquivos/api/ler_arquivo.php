<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r'); // 'r' --> read ou ler
echo fread($arquivo, 10); // lendo arquivo por bytes --> no caso aqui foi 10bytes

echo '<br>';

echo fread($arquivo, 10); // lendo mais 10bytes
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');

$tamanhoDoAqrquivo = filesize('teste.txt');
echo 'O tamanho do arquivo em bytes é: ' . $tamanhoDoAqrquivo . ', <br>';
echo fread($arquivo, $tamanhoDoAqrquivo);;
fclose($arquivo);

echo '<hr>';


$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br';
echo fgets($arquivo) . '<br';
var_dump(fgets($arquivo));
echo fgets($arquivo) . '<br';
fclose($arquivo);

echo '<br>';
echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) { // lendo o arquivo inteiro
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

