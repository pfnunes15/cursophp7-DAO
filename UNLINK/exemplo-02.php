<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 06/09/2017
 * Time: 19:56
 */

if(!is_dir("images"))mkdir("images");

foreach (scandir("images") as $item){
    if(!in_array($item, array(".", ".."))) {

        unlink("images/" .$item);
    }
}

echo "ok!";