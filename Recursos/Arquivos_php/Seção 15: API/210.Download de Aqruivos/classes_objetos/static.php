<div class="titulo">Membros Estáticos</div>

<?php

class A {
  public $naoStatic = 'Variável de instância';
  public static $static = 'Variável de classe (stática)';

  public function mostrarA() {
    echo "Não estátoca = {$this->naoStatic} <br>";
    // Tentativa 1
    // echo "Estática = {$this->static} <br>";
    // Tentativa 1
    // echo "Estática = {self::static} <br>";
    echo "Estática = " . self::$static . "<br>";
  }
  

  // método de Classe
  public static function mostrarStaticA() {
    // echo "Não estática = {$this->naoStatic}"; // só funciona usando self::naoStatic
    // echo "Estática = {$static} <br>";
    echo "Estática = " . self::$static . "<br>";
  }
}

$objetoA = new A; // método de instância
$objetoA->mostrarA();
echo "<hr>";


// $objetoA->mostrarStaticA(); // funciona mas não é a maneira mais adequada quando se trata de estática.
A::mostrarStaticA();
echo A::$static, ' antes de ser alterado <br>'; // acessar diretamente pela classe.

echo "<hr>";

A::$static = "Alterado o membro de classe!";
echo A::$static, '<br>'; // acessar diretamente pela classe.