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
//$usuario = new Usuario();
//$usuario->login("Jonathan", "1234");
//echo $usuario;

//Inserindo o usuario
//$aluno = new Usuario("f5","3434");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadByid(8);

$usuario->update("zequinha", "88888");

echo $usuario;

 ?>