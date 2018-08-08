<?php

require_once("config.php");

/* Carrega um usuário 
$root = new Usuario();
$root->loadbyId(1);
echo $root;
*/

//Carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma Lista de usuarios buscando pelo login

//$search = Usuario::search("r");

//echo json_encode($search);

//Carrega um usuário e senha

$usuario = new Usuario();
$usuario->login("matheus", "12345");

echo $usuario;

?>