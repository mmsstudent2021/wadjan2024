<?php


header("Content-Type:application/json");


if ($_SERVER['REQUEST_METHOD'] != "GET") {
    $message = json_encode(["message" => "GET method only"]);
    die($message);
}



$productFolder = "products";
$products = array_filter(scandir($productFolder), fn ($el) => $el != "." && $el != "..");

$result = [];
foreach ($products as $product) {

    $content = file_get_contents($productFolder."/".$product);
    $obj = json_decode($content);
    array_push($result,$obj);
}

echo json_encode($result);