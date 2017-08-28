<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 28/08/2017
 * Time: 16:02
 */

require_once ("config.php");

$root = new Usuario();

$root->loadById(3);

echo $root;