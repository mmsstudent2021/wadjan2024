<?php



echo "<pre>";


$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

// print_r($_FILES);

// print_r(pathinfo($_FILES["upload"]["name"])["extension"]);

// $arr = explode(".",$_FILES["upload"]["name"]);
// echo end($arr);

$error = false;

foreach ($_FILES["upload"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFileName = $saveFolder . "/" . uniqid() . "." . $ext;

    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {
        $error = true;
    }
}

if ($error === false) {
    header("Location:gallery.php");
}

// print_r($_FILES);