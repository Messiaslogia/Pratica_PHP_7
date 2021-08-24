<?php

class Documento{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($a)
    {
        $this->numero = $a;
    }
}

class CPF extends Documento{ // Pai não herda do filho  

    public function validar():bool
    {
        $numeroCpf = $this->getNumero();

        return true;
    }
}

$doc = new CPF();

$doc->setNumero("123456");

$doc->validar()

?>