

<?php
// enquanto for verdadeiro: execute 

    $condicao = true;

    while($condicao){

        $nuemro = rand(1 ,10); // passa um valor randonico de 1 a 10 nesse caso

        if ($nuemro === 3) {
            echo "Tress!!!";
            $condicao = false;
        }
        echo $nuemro . " ";
    }

    echo "<br>";
    echo "<hr>";

    $total = 100;
    $desconto = 0.9;

    do {
        
        $total *= $desconto;

    } while ($total > 100);

    echo $total;

?>