<?php

$a = 10;

function trocaValor(&$b){ // quando tem & a passagem de parametro é por referencia

$b += 50;
return $b;
}

echo trocaValor($a); // muda o valor da variavel 
echo "<br>";
echo $a;

echo "<hr>";

$pessoa = array(
    'nome' => 'João',
    'idade' => 30
);

foreach($pessoa as &$value){
    if(gettype($value) === 'integer') $value += 10;//gettype retorna o tipo de dado
        
        echo $value.'<br>';
    
    
  
}