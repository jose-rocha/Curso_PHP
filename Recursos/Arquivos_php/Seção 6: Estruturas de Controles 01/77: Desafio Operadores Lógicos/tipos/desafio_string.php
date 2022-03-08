<div class="titulo">Desafio String</div>

<?php
  /*
    Enunciado.
    Avaliando os metódos da documentação da string,
    qual o metódo que a posição do texto 'abc' na string '!AbcaBcabc' retorna 1?
  */

  echo strpos('!AbcaBcabc', 'abc'), '<br>';
  echo stripos('!AbcaBcabc', 'abc'), '<br>';

  echo 'Com o metódo strtoupper ' . strpos(strtoupper('!AbcaBcabc'), strtoupper('abc')), '<br>';
  echo 'Com o metódo strtolower ' . strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));
