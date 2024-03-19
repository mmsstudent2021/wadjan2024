<?php

require_once "./db_connect.php";



// print_r($_POST);

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// SQL 

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

$query = mysqli_query($conn,$sql); // working stage

if($query){
    header("Location:product-create-list.php");
}

// var_dump($query);

// echo $sql;
