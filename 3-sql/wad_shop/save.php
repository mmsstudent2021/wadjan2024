<?php

echo "<pre>";

$conn = mysqli_connect("localhost", "hhz", "asdffdsa","wad_shop");

if(!$conn){
    die(mysqli_connect_errno());
}



// print_r($_POST);

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// SQL 

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

$query = mysqli_query($conn,$sql); // working stage

if($query){
    header("Location:index.php");
}

// var_dump($query);

// echo $sql;
