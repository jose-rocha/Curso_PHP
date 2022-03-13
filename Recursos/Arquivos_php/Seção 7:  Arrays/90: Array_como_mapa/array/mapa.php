<div class="titulo">Mapa</div>

<?php
  $dados =array(
    "idade" => 25, 
    "cor" => "verde", 
    "peso" => 49.8
  );

  print_r($dados);

  echo "<br>";

  var_dump($dados[0]); // null pq não existe a chave 0 nem o índice 0
  echo "<br>" . $dados['idade'];
  echo "<br>" . $dados['cor'];
  echo "<br>" . $dados['peso'];
  echo "<br>";
  var_dump($dados['outra_informação']); // null também, pq a chave outra_informação é inexistente

  echo "<br>";

  $lista = array(
    'a',
    'cinco' => 'b',
    'c',
    8 => 'd',
    'e',
    6 => 'f',
    'g',
    8 => 'h'
  ); // não recomendado usar dessa forma com chaves e índice

echo "<br>";
print_r($lista);

$lista[] = 'i'; //adicionando um itém no array com índice.
echo "<br>";
print_r($lista);

$lista['vinte'] = 'j'; //adicionando um itém no array com chave.
echo '<bar>';
print_r($lista);

$lista[false] = 'Tentei indexar com false';
echo '<bar>';
print_r($lista);

$lista[true] = 'Tentei indexar com true';
echo '<bar>';
print_r($lista);
