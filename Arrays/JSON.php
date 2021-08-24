<?php

$frutas = array("laranja", "abacaxi", "maça"); // vetor po ter apenas uma dimensão 

print_r($frutas); // exibe um array e sua estrutura 

echo '</br>';


$carro [0][0] = "GM";
$carro [0][1] = "Cobalt";
$carro [0][2] = "Onix";
$carro [0][3] = "Camaro"; //Array bidimensional 

echo $carro [0][3];

echo '</br>';

echo end($carro [0]); // traz a ultima posição do array 

echo '</br>';


$pessoa = array();

array_push($pessoa, array(
    'nome'=>'Joao',
    'idade'=>20
));

array_push($pessoa, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

echo json_encode($pessoa); // transforma array em JSON

echo '</br>';

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // transforma json em código * coloque true para não retornar objeto

var_dump ($data);

?>