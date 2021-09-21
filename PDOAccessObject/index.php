<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*Carrega um usuario
$root = new Usuario();
$root ->loadById(0);
echo $root;*/

/*Carrega uma lista de usuarios
$lista = Usuario::getList(); //Ele é statico então posso chamar ele fora do scopo
echo json_encode($lista);*/

/*Obtem os dados do usuario pelo login usando LIKE
$search = Usuario ::search("Me");
echo json_encode($search);*/

/*Obtem os dados do usuario atraves do login e senha 
$usuarios = new Usuario();
$usuarios->login("Messias", "user@123");
echo $usuarios;*/

/*Utiliznado o Procedure para inserir dados no banco
$aluno = new Usuario();

$aluno->getDeslogin("aluno");
$aluno->setDessenha("@luno");

$$aluno->insert();

$aluno = new Usuario('aluno', '@aluno');
$aluno->insert();
echo $aluno;*/

/*Update dos dados do banco
$usuario = new Usuario();;

$usuario->loadById(8);

$usuario->update("professor", "!@#$%");*/

/*Comando Delete
$usuario = new Usuario();;

$usuario->loadById(8);

$usuario->delete();

echo $usuario;*/









?>