<?php


$conn = mysqli_connect("localhost", "hhz", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}



// print_r($_POST);
$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name='$name',price=$price,stock=$stock WHERE id=$id";

// echo $sql;

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:index.php");
}
