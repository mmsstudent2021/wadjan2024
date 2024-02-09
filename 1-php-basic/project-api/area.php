<?php

header("Content-Type:application/json");


if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_POST["width"]) || empty($_POST["breadth"])) {
    $message = json_encode(["message" => "Required both width and breadth"]);
    die($message);
}

$area = $_POST["width"] * $_POST["breadth"];
$_POST["area"] = $area . " sqft";

echo json_encode($_POST);

// print_r($_SERVER['REQUEST_METHOD']);
