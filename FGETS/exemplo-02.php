<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 07/09/2017
 * Time: 11:50
 */

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">
