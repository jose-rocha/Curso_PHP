<?php

namespace Aritimetica;

class NaoInteiroEception extends \Exception {

}

function intdiv($a, $b) {
  if($b == 0) {
    throw new \DivisionByZeroError();
  }

  if ($a % $b > 0) {
    throw new NaoInteiroEception();
  }

  return $a / $b;
}
