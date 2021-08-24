<?php 

    function ola($texto="Mundo", $periodo="Bom dia"){ // parametros obrigatórios sempre no lado esquerdo 
        return "Ola $texto! $periodo! <br>";

    }
    function olameu(){
        $argumentos = func_get_args();//pega os argumentos e retorna em um array
        return $argumentos;
    }

    echo ola("Mundo", "Bom dia");
    echo ola("", "Boa noite");
    echo ola("Glaucio","Boa tarde");
    echo ola("João", "");

    var_dump(olameu("Mundo", 10));

?>