<div class="titulo">Arrays Constantes</div>

<?php
  const FRUTAS = ['Laranja', 'Abacaxi'];
  // FRUTAS[0] = 'Banana'; //em PHP não é possível reatribuir um valor de um array constante.
  // FRUTAS[] = 'Banana'; 
  echo FRUTAS[0];

  const CARROS = ['Fiat' => 'Uno', 'Ford' => 'Fiesta'];
  //CARROS['BMW'] = '325i';
  echo '<br>' . CARROS['Fiat'];

  define('CIDADES', ['Belo Horizonte', 'Recife']); //define é uma constante global
  // CIDADES[] = 'Rio de Janeiro';
  echo '<br>' . CIDADES[1];