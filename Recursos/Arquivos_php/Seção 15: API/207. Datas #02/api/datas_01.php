<div class="titulo">Datas #01</div>

<?php

echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:1 A') . '<br>';

echo strftime('teste %A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8') . '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';


$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');

echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';


$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);