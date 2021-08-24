<?php

$conn = new PDO("mysql:host=localhost;dbname=tecandtec","root", "bloodyroots");
$stmt=$conn->prepare("INSERT INTO usuarios VALUES(:LOGIN, :SENHA, 'NULL', 'NULL', 'NULL', 'NULL', '1')");

$login  = "Messias";
$senha = "!@#$";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "inserir OK!"

?>