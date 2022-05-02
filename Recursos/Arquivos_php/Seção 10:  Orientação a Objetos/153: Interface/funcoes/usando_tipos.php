<div class="titulo">Declarando Tipos</div>

<?php
function somar1($a, $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar1(5, 6) . '<br>';
echo somar1(1.5, 1.9) . '<br>';
echo somar1(5, '4dois') . '<br>';

echo '<hr>';


function somar2(int $a, int $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar2(5, 6) . '<br>';
echo somar2(1.5, 1.9) . '<br>';
echo somar2(5, '4') . '<br>';

function somar3($a, $b): int {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo '<hr>';


echo somar3(5, 6) . '<br>';
echo somar3(1.6, 1.9) . '<br>';
echo somar3(5, '4dois') . '<br>';