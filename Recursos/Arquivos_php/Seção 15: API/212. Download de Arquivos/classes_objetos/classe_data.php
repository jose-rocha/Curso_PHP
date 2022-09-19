<div class="titulo">Classe Data</div>


<?php

class Data {
  public $day = 20;
  public $month = '04';
  public $year = 2022;

  public function apresentar() {
    return "$this->day/$this->month/$this->year";
  }
}

$timeStamp = new Data();

$timeStamp->day = 15;
$timeStamp->month = '02';
$timeStamp->year = 1991;
echo $timeStamp->apresentar();

echo '<hr>';

$travel = new Data();

$travel->day = '06';
$travel->month = '04';
$travel->year = 2012;

echo $travel->apresentar();

