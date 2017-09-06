<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 06/09/2017
 * Time: 18:07
 */

$name = 'images';

if (!is_dir($name)) {

    mkdir($name);
    echo "Diretório $name criado com sucesso!";

} else {

    rmdir($name);
    echo "Já existe o diretório: $name foi removido";
}