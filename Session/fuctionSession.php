<?php


require_once ("confiphp.php");

 echo session_save_path(); // mostra onde está salvando o arquivo ou salvo
    echo "<br>";

 echo session_status(); //Retorna um int informando qual o status *ver documentação
    echo "<br>";

    switch (session_status()){
        case PHP_SESSION_DISABLED:
            echo "as sessões estão desabilitadas";
            break;
        
        case PHP_SESSION_NONE:
            echo "as sessões estiverem habilitadas, mas nenhuma existir";
            break;

        case PHP_SESSION_ACTIVE:
            echo "as sessões estiverem habilitadas, e uma existir";
            break;
    }


?>