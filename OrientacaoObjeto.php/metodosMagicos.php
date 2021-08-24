<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) // metodo magico, contrutor
    {
    
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()// destroi uma variavel ou elimina uma sessao, chama unset
    {
        var_dump("Destruiu");
    }
    public  function __toString() // faz um retorno para string no echo
    {
        return $this->logradouro.",".$this->numero." - ". $this->cidade;
    }

}

$meuEndereco = new Endereco("Rua do mal","123","Diadema");
var_dump($meuEndereco);
unset($meuEndereco);

?>