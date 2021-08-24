<?php

/**
 * 
 * POLIMOSFISMO TER OS MESMOS METODOS NA CLASSE PAI E NA CLASSE FILHO
 *  QUE FAZEM COISAS DIFERENTES
 * */

class Animal{

    public function mover(){

        return "anda";
    }
    public function falar(){
        return "fala";
    }
}

class Cachorro extends Animal{

    public function falar(){
    
        return "late";   
    }
}

class Passarinho extends Animal{

    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa e".parent::mover() ;// Alem de usar o polimorfismo ela ainda puxa o metodo da classe Pai 

    }
}

$cao = new Cachorro();
echo "cão:".$cao->falar();
echo "<br>";
echo "cão:".$cao->mover();
echo "<br>";
echo "<---------------------------->";
echo"<br>";

$passaro = new Passarinho();
echo "Pássaro: ".$passaro->falar();
echo "<br>";
echo "Pássaro: ".$passaro->mover();


?>