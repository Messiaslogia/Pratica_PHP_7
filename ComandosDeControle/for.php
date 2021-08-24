<?php

/*for ($i=0; $i < 1000; $i++) { 
    
    if ($i > 200 && $i < 800) continue; // "Continue" interrompe o laço durante a condição do if

        if ($i === 900) break; //break para o laço atravez da condição do if
    
        echo $i ."<br>";
}*/


echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
    
    echo '<option value"' .$i.'">'.$i.'</option>';
}

echo "</select>"



?>