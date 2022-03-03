<div class="titulo">Tipo String</div>

<?php
  echo 'Eu sou uma string';
  echo '<br>';
  var_dump("Eu também");
  echo '<br>';

  //concatenação
  echo ('Nós também' . ' somos' . '<br>'); // . para concatenar as frases
  echo ("O número é " . 123);
  echo '<br>', 'Também aceito', ' virgulas';

 echo '<br>';
 echo "'Teste'" . '"Teste"' . '\'Teste\'' . "\"Teste\"";

 print("<br> Também existe a function print");
 print"<br> Também existe a function print sem parenteses";

 # Algumas funções ou métodos
 echo '<br>' . strtoupper('maximizado'); # transforma o texto em caixa alta
 echo '<br>' . strtolower('MINIMIZADO'); # transforma o texto em caixa baixa
 echo '<br>' . ucfirst('só a primeira letra em caixa alta');
 echo '<br>' . ucwords('o começo de todas as palavras em caixa alta');
 echo '<br>' . strlen('Quantos caracteres ou tamanho da string');
//  echo '<br>' . mb_strlen("Eu também", "utf-8"); // para resolver o problema com os assentos e contar só as letras, porém não está aparecendo no browser o valor
 echo '<br>' . substr('Só uma parte do texto', 7, 6); // pega só uma parte do texto, aqui no exemplo ele vai pegar da letra de numero 7 até o 6 - 1.
 echo '<br>' . substr('Só uma parte do texto', 7); // sem o segundo parâmetro.
 echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');