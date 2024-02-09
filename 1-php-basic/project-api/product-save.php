<?php

header("Content-Type:application/json");


if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["rating"]) || empty($_FILES["image"])) {
    $message = json_encode(["message" => "Required all input"]);
    die($message);
}


$saveFolder = "product-photos";
$productFolder = "products";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

if (!is_dir($productFolder)) {
    mkdir($productFolder, 0777);
}

$ext = pathinfo($_FILES['image']['name'])["extension"];
$saveFileName = $saveFolder . "/" . uniqid() . "." . $ext;

if (move_uploaded_file($_FILES['image']['tmp_name'], $saveFileName)) {
    $_POST['photo'] = $saveFileName;
}

$json = json_encode($_POST);

$productFileName = $productFolder . "/" . uniqid() . "_" . $_POST["name"] . ".json";

touch($productFileName);

$fileStream = fopen($productFileName, 'w');

fwrite($fileStream, $json);

fclose($fileStream);

echo $json;