<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 08/09/2017
 * Time: 16:59
 */

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename($dir1 . DIRECTORY_SEPARATOR . $filename,
    $dir2 . DIRECTORY_SEPARATOR . $filename );

echo "Arquivo movido com sucesso!";