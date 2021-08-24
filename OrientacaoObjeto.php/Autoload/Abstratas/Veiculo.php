<?php

interface Veiculo{ //Interface obriga a seguir o padrao de metodos dentro dela 

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);


}

?>