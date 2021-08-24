<?php 

require_once ("confiphp.php");

 echo session_id()."<br>";
 session_regenerate_id(); // força a geração de um novo ID de sessao, bom para segurança 
    echo session_id();
    var_dump($_SESSION);





?>