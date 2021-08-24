<?php

function soma (int ...$valores){// o indicador ... todos os valores serão passados para o array com tipo de dados int.

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.2, 2.2);
echo "<br>";