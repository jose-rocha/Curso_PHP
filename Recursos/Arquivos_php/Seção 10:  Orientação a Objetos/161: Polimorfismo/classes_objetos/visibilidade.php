<div class="titulo">Visibilidade</div>


<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
      // $this->naoMostrar();
      echo "Classs A) Público = {$this->publico} <br>";
      echo "Classs A) Protegido = {$this->protegido} <br>";
      echo "Classs A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHerança()  {
      echo 'Serei transmitido por herança! <br><br>';
    }
    private function naoMostrar() {
      echo "Não vou imprimir! <br>";
    }
}

$a = new A();
$a->mostrarA();

echo '<hr>';

/* --- // ---  */

class B extends A {
  public function mostrarB() {
    parent::vaiPorHerança();

    echo "Class B) Público = {$this->publico} <br>";
    echo "Class B) Protegido = {$this->protegido} <br>";
    echo "Class B) Privado = {$this->privado} <br>";

  }
}

$b = new B();
$b->mostrarB();
$b->vaiPorHerança(); /* não será chamado aqui fora
 pois estar protegida, só por herança dentro da classe 
 igual na linha 35 parent::vaiPorHerança();*/