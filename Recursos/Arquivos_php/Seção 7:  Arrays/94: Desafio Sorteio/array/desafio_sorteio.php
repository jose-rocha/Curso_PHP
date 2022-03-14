<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ['Elza', 'Rapuzel', 'Branca de Neve', 'Cinderela'];
$index = array_rand($nomes);

echo "<h1>$nomes[$index]<h1>";