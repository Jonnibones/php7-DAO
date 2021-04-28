<?php 

require_once("config.php");


//Listar 1 usuário
/*$root = new Usuario();
$root->loadByid(1);
echo $root;*/

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega usuarios por iniciais
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("Jonathan", "1234");
echo $usuario;

 ?>