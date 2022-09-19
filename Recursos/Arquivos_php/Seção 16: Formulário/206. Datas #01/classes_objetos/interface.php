<div class="titulo">Iterface</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
  function mamar();
}

interface Felino {
  function correr();
}

interface Canino extends Animal, Mamifero {
  function latir(): string;
}

class Cachorro implements Canino {
  function respirar() {
    return "Irei usar oxigênio!";
  }

  function latir(): string {
    return "Au Au";
  }

  function mamar() {
    return 'Irei beber leite!';
  }

  function correr() {
    return 'vrunnnn!';
  }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr();


echo '<hr>';
var_dump($animal);

echo '<hr>';
var_dump($animal instanceof Cachorro);

echo '<hr>';
var_dump($animal instanceof Canino);

echo '<hr>';
var_dump($animal instanceof Mamifero);

echo '<hr>';
var_dump($animal instanceof Animal);

echo '<hr>';
echo var_dump($animal instanceof Felino) . 'não é!'; // Felino não foi incluido em nenhuma classe
