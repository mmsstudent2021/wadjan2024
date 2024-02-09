<?php

header("Content-Type:application/json");


if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_POST["amount"]) || empty($_POST["from_currency"]) || empty($_POST["to_currency"])) {
    $message = json_encode(["message" => "Required all amount, from_currency and to_currency"]);
    die($message);
}


// echo json_encode($_POST);

$rateJson = file_get_contents("https://forex.cbm.gov.mm/api/latest");
$rateObj = json_decode($rateJson, true);
$rates = $rateObj["rates"];

$amount = $_POST["amount"];

// echo json_encode($rates);
$from = $_POST["from_currency"];
$fromRate = str_replace(",", "", $rates[$from]);
$to = $_POST["to_currency"];
$toRate = str_replace(",", "", $rates[$to]);

$result = ($amount * $fromRate) / $toRate;

$_POST["result"] = round($result, 2) . " " . $to;

echo json_encode($_POST);
