<?php


// print_r($_GET);

$fileName = $_GET["file_name"];
$content = file_get_contents("products/" . $fileName);
$obj = json_decode($content);

if(unlink($obj->product_photo)){
    if(unlink("products/".$fileName)){
        header("Location:product.php");
    }
}
