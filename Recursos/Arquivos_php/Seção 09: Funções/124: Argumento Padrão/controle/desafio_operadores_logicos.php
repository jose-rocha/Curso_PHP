<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
  Dois trabalhos -> terça e quinta!
  - Se os dois forem executados - TV 50' e sorvete.
  - Se apenas um for executado -> TV 32' e Sorvete.
  - Se nenhum for executado -> fica em casa mais saudável!
-->

<form action="#" method="post">
  <div>
      <label for="t1">Trabalho 1 (Terça)</label>
    <select name="t1" id="t1">
      <option value="--">escolha uma opção</option>
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
    </select>
  </div>
  <div>
      <label for="t2">Trabalho 2 (Quinta)</label>
    <select name="t2" id="t2">
      <option value="--">escolha uma opção</option>
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
    </select>
  </div>
  <button>Executar</button>
</form>

<style>
  button, select {
    font-size: 1.8rem;
    cursor:pointer
  }
</style>

<?php
  // echo "Trabalho da terça foi executado:  {$_POST['t1']}";
  // echo "<br> Trabalho da Quinta foi executado:  {$_POST['t2']}";

  if ( isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $tv = '';
    $sorvete = false;
    $trabalhoTerca = "Trabalho da terça foi executado?:  {$_POST['t1']}";
    $trabalhoQuarta = "<br> Trabalho da Quinta foi executado?:  {$_POST['t2']}";


    if ($t1 && $t2) {
      $tv = '50';
      echo $trabalhoTerca;
      echo $trabalhoQuarta;

    } else if ($t1 != $t2) {
      $tv = '32';
      echo "Trabalho da terça foi executado?:  {$_POST['t1']}";
      echo "<br> Trabalho da Quinta foi executado?:  {$_POST['t2']}";
    }

    if ($t1 || $t2 ) {
        $sorvete = true;
    }

    if ($tv) {
      $resultado  = "Vamos comprar uma TV de $tv";
    } else {
      $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if ($saudavel) {
      $resultado .= "<br>E estamos mais saudáveis!";
    } else {
      $resultado .= "<br>Sorvete liberado \o/";
    }

    echo "<p>$resultado</p>";
  }