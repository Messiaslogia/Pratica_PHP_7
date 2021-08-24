// Switch já sei quais opções vão acontecer ou não

<?php

$diaDaSemana = date("w");

switch ($diaDaSemana) {
    case 0:
        echo "domingo";
        break;
    
    case 1:
        echo "Segunda-feira";
        break;

    case 2:
        echo "Terça-feira";
        break;

    case 3:
       echo "Quarta- feira";
        break;
    
    default:
        echo "Data invalida";
        break;
}

?>