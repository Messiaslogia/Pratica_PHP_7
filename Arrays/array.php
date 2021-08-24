<?php

$frutas = array("laranja", "abacaxi", "maça"); // vetor po ter apenas uma dimensão 

print_r($frutas); // exibe um array e sua estrutura 


$carro [0][0] = "GM";
$carro [0][1] = "Cobalt";
$carro [0][2] = "Onix";
$carro [0][3] = "Camaro"; //Array bidimensional 

echo $carro[0][3];

echo "<br>";

echo end($carro[0]); // traz a ultima posição do array 


$pessoa = array();

array_push($pessoa, array( // array_push adiciona um objeto dentro dele 
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoa, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

echo "<br>";

print_r($pessoa[0]['idade']) // Array bidimencional recebendo outro array dentro dele 

?>