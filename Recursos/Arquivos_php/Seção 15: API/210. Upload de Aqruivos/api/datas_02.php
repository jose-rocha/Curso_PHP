<div class="titulo">Datas #02</div>

<?php

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatData2 = '%A, %d de %B de %Y';
$formatDataHora = '%A %d de %B de %Y - %H:%M:%S';



$agora = new  DateTime();

//print_r($agora);
//echo '<br>';

echo 'Today ' . $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8') . '<br>';
echo 'Hoje ' . strftime($formatData2) . '<br>';

$anteOntem = new DateTime('-2 day');
echo strftime($formatData2, $anteOntem->getTimestamp()) . '<br>';

echo '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo strftime($formatDataHora, $dataFixa->getTimestamp()) . '<br>';

echo '<br>';

$proximaSemana = new DateTime('+1 week');

$proximaSemana->modify('+1 day');
echo strftime($formatDataHora, $proximaSemana->getTimestamp()) . '<br>';

echo '<br>';

$proximaSemana->setDate(2000, 5, 20);
echo strftime($formatDataHora, $proximaSemana->getTimestamp()) . '<br>';


echo '<br>';

$amanha = new DateTime('+1 day');

$dataPassada = new DateTime('2021-02-15');
$dataFutura = new DateTime('2023-02-15');
$outraData = new DateTime('2030-02-15');

echo $amanha > $dataPassada ? 'Maior' : 'Menor';

echo '<br>';

echo $amanha > $dataFutura ?   'Maior' : 'Menor';

echo '<br>';

echo  $outraData == $dataFutura ?  'Igual' : 'Diferente';

echo '<br>';

$tz = new  DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz); //pegando a data e hora local
echo $agora->format('d/M/Y H:i:s');