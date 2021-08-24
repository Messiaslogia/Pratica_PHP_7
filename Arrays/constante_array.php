<?php   

define("SERVIDOR", "127.0.0.1"); // Declarando uma constante, Primeiro parametro é o nome dela o segundo é o valor

echo SERVIDOR;


echo '</br>';

define("BANCO_DE_DADOS", [ //Array constante 
    '127.0.0.1',
    'root',
    'password',
    'test'
]); // se colocar TRUE ela fica insensitive 

print_r(BANCO_DE_DADOS);

echo '</br>';

echo PHP_VERSION; // Constante definida por padrao pela linguagem( mostra a versao do PHP)

echo '</br>';

echo DIRECTORY_SEPARATOR; //Barra de diretorio do sistema operacional 

?>