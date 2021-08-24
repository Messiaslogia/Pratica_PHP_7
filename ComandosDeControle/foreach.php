//usado para percorrer arrays e coleçoes; repete cada item;

<form>  
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Ok">
</form>

<?php

if (isset($_GET)) {
    
    foreach ($_GET as $key => $value) { // retorna o valor e o nome do campo pelo modo GET do form

        echo "Nome do campo: " . $key . "<br>";

        echo "Valor do campo: " . $value;

        echo "<hr>";


    }
}


?>