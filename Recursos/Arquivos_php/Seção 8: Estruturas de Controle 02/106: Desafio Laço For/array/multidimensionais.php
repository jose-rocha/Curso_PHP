<div class="titulo">Arrays Multidimensionais</div>

<?php
  $dados = [
    [
      'nome' => 'Roberto',
      'idade' => 31,
      'naturalidade' => 'Ceará'
    ],
    [
      'nome' => 'Maria',
      'idade' => 25,
      'naturalidade' => 'São Paulo'
    ]
  ];

  print_r($dados);
  echo '<br>' . $dados[0]['idade'];

  $dados[] = [
    'nome' => 'Florinda',
    'idade' => 30,
    'naturalidade' => 'México'
  ];

  echo '<br>';
  print_r($dados);
  echo '<br>' . $dados[2]['idade'];

  $dados[2]['vizinho'] = 'chaves';
  echo '<br>';
  print_r($dados[2]);

  unset($dados[1]);
  echo '<br>';
  print_r($dados);
  var_dump($dados[1]);

