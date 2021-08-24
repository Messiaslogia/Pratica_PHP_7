<?php

$conn = new PDO("myslq:dbname=tecandtec;host=localhost", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("Select * from usuarios");

$stmt->execute();

$conn->rollBack(); // não deixa executar a função 

$conn->commit() // confirma a execução do ato 



?>