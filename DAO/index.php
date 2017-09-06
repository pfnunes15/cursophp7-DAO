<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 28/08/2017
 * Time: 16:02
 */

require_once ("config.php");

//Carrega um usuário
// $root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuarios com search
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

/*CRIANDO UM NOVO USUÁRIO

$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();

echo $aluno;
    */

$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "!@#$%&/()");

echo $usuario;