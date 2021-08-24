<?php

interface Veiculo{ //Interface obriga a seguir o padrao de metodos dentro dela 

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);


}

abstract class Automovel implements Veiculo{ // implement implementa uma interface na classe e o obriga a seguir o padrao da interface

    public function acelerar($velocidade){

        echo "O veiculo acelerou até " . $velocidade . "km/h";
    }
    public function frenar($velocidade){

        echo "O veiculo frenou até " . $velocidade . "km/h";
    }
    public function trocaMarcha($marcha){

        echo "O veiculo engatou a marcha" . $marcha;
    }


}

class Delrey extends Automovel
{
    
}



?>