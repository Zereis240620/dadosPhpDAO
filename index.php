<?php 
require_once("config.php");
/*
$sql = new sql();

$usuario = $sql->select("SELECT * FROM usuario");
 
 echo  json_encode($usuario);*/

 $root = new usuario();

 $root->loadbyId(1);

 echo $root;

 ?>