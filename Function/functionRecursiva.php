<?php


function tabuada($numeroTabuada, $numero = 8){
    $num = $numero;
    while($num <= 10) {
        echo $numeroTabuada . "x" . $num . " = " . $numeroTabuada * $num;
        echo "<br/";

        $num++;
        ;
    }
    
}
tabuada(2);
?>