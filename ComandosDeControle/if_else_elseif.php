<?php

$idade = 35;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 75;

if ($idade < $idadeCrianca){

    echo "Crianca";

} else if($idade < $idadeMaior){

    echo "adolescente";

}else if ($idade < $idadeMelhor){

    echo "Adulto";

}else{

    echo "idoso";
}
 
echo "<br>";

//operador ternário "?" ":"

echo ($idade < $idadeMelhor)?"Manor de idade":"Maior de idade"; //"?" representa um "então" para um condição e o  ":" representa um else if;


?>