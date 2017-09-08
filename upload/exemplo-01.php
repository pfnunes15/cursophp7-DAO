<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload">

<button type="submit">Send</button>
</form>


<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 07/09/2017
 * Time: 12:53
 */

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $file = $_FILES["fileUpload"];

    if ($file["error"]){

        throw new Exception("Error: " .$file["error"]);
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)){

        mkdir($dirUploads);
    }

    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

        echo "Upload realizado com sucesso";

    } else {

    throw new Exception("Não foi possível realizar o upload.");
    }

}

