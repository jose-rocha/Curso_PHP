<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php

echo 'Namespace atual: ' . __NAMESPACE__ . '; <br>';
const constante = 123 ;

namespace App\Principal;
echo 'Namespace atual: ' . __NAMESPACE__ . '; <br>';
const constante = 234;

namespace  App\Principal\Especifico;
echo 'Namespace atual: ' . __NAMESPACE__ . '; <br>';
const constante = 345;




echo constante . '<br>'; // 345
//echo constante('\\' . __NAMESPACE__ . '\constante') . '<br>'; // não funcionou.
echo  \App\constante . '<br>'; // 123
echo  \App\Principal\constante . '<br>'; // 234
echo  \App\Principal\Especifico\constante . '<br>'; // 345