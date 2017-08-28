<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 28/08/2017
 * Time: 16:00
 */

spl_autoload_register(function($class_name){

    $filename = $class_name.".php";

    if(file_exists(($filename))){
        require_once ($filename);
    }
});