<?php


/**
 * //inclui os arquivos para recaregar automaticamente
 *  para que carregue as classe automaticamnte sem o require
 * 
 * Crio um arquivo onde eu daria um require no autoload 
 * para utilizar suas classes
 */
function __autoload($nomeclasse){ 

    require_once("$nomeclasse.php");
    
}

$carro = new Delrey(); // invoca a função se ela for definida
$carro->acelerar(80);

?>