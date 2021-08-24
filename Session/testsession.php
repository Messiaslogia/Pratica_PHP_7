<?php

require_once ("confiphp.php");

session_unset($_SESSION['nome']); //apaga todos os dados da sessao, mais o usuario continua lá

echo $_SESSION(['nome']);

session_destroy();// retira todos os dados e remove a sessao

?> 