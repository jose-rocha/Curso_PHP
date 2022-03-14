<div class="titulo">Desafio Equação</div>

<?php
 $numA = (6 * (3 + 2)) ** 2; // ** é o mesmo que ^;
 $denA = 3 * 2;
 echo 'O valor de $numA é ' . $numA . '.';
 echo '<br>';
 echo 'O valor de $denA é ' . $denA . '.';

 echo '<br>';

 $numB = (1 - 5) * (2 - 7);
 $denB = 2;
 echo 'O valor de $numB é ' . $numB . '.';
 echo '<br>';
 echo 'O valor de $denB é ' . $denB . '.';

 echo '<br>';
 echo '---------------------------------';
 echo '<br>';


 $superiorA = $numA / $denA;
 echo ' $numA / $denA é = ' . $superiorA;

 echo '<br>';

 $superiorB = ($numB / $denB) ** 2;
 echo '($numB / $denB) ^ 2 é = ' . $superiorB;

 echo '<br>';
 echo '---------------------------------';
 echo '<br>';

 $superior = ($superiorA - $superiorB) ** 3;
 echo '($superiorA - $superiorB) ^ 3 é = ' . $superior;
 echo '<br>';

 $inferior = 10 ** 3;
 echo '10 ^ 3 é = ' . $inferior;

 echo '<br>';


 $final =  $superior / $inferior;
 echo '$superior / $inferior é = ' . $final;






 