<?php

echo "<pre>";

$conn = mysqli_connect("localhost", "hhz", "asdffdsa");

if(!$conn){
    echo mysqli_connect_errno();
}

die();

// print_r($_POST);

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// SQL 

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

echo $sql;
