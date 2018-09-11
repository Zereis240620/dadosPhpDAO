<?php 
require_once("config.php");
/*
$sql = new sql();

$usuario = $sql->select("SELECT * FROM usuario");
 
 echo  json_encode($usuario);*/
//Carrega um só usuario
 /*$root = new usuario();

 $root->loadbyId(1);
 echo $root;*/

 //carrega uma lista de usuarios
 /*$lista = Usuario::getList();

 echo json_encode($lista);*/

 // carrega uma lista de usuarios buscando pelo login

/*$search = Usuario::search("j");

echo  json_encode($search);*/

//carrega um usuario usando o login e a senha 
/*$usuario = new Usuario();
$usuario->login("","");


echo  $usuario;*/

//$aluno = new Usuario("aluno","@aluno");

/*$aluno->setDeslogin("Aluno");
$aluno->setDessenha("@aluno094");*/

//$aluno->insert();


//echo $aluno;

//Criando um novo usuario

$usuario = new Usuario();

$usuario ->loadbyId(1);
$usuario->update("josé reis","nadahaver")

echo $usuario;



 ?>