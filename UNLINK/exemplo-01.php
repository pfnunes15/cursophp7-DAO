<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 06/09/2017
 * Time: 19:52
 */

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "Arquivo removido com sucesso!";