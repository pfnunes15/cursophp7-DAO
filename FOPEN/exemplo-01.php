<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 06/09/2017
 * Time: 18:40
 */

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s"). "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";