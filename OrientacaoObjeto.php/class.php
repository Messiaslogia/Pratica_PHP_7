<?php

class Pessoa{ // Classes começam com letra maiuscula 

    public $nome;// atributo

    public function falar(){ //Método
        
        return "meu nome é ".$this -> nome; // this referencia a variavel dentro da class 
    }
}
$glauco = new Pessoa();
$glauco->nome="Messias";
echo $glauco->falar();