<div class="titulo">If Else</div>

<?php
  if(true) {
    echo 'Serei impresso?';
    echo ' <br> Serei impresso novamente? <br>';
  }

  echo '<br>';

  if (false) {
    echo 'Verdadeiro - Parte A <br>';
    echo 'Verdadeiro - Parte B <br>';
  } else {
    echo 'Falso - Parte A <br>';
    echo 'Falso - Parte B <br>';
  }


  if (false) {
    echo 'Passo A <br>';
  } else if(true) {
    echo 'Passo B <br>';
  } else {
    echo 'Último passo <br>';
  }

  echo '<br>';

  if (false) {
    echo 'Plano A <br>';
  } else if(false) {
    echo 'Plano B <br>';
  } else if(false) {
    echo 'Plano C <br>';
  } else if(false) {
    echo 'Plano D <br>';
  } else if(false) {
    echo 'Plano E <br>';
  } else  {
    echo 'Último passo <br>';
  }
  echo 'Fim';
