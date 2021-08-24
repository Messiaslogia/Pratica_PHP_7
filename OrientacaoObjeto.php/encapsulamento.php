<?php

class Pessoa{

    public $nome = "Rasmus Lerdorf"; // vista por todos 
    protected $idade = 48; // protect pode ser visto pela propria classe e por suas filhas 
    private $senha = "12345"; // private só poder ser visto pela propria classe

    public function verDados(){
    
        echo $this->nome ."<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";    
    }

}

class Programador extends Pessoa{

    public function verDados()
    {
        echo get_class($this). "<br>"; // informa a classe 

        echo $this->nome ."<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

$objeto = new Programador();

$objeto->verDados();


?>