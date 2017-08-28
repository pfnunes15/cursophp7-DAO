<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 28/08/2017
 * Time: 16:02
 */

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);