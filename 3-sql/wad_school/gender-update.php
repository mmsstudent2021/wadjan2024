<?php


require_once "./db_connect.php";



// print_r($_POST);
$id = $_POST["row_id"];
$type = $_POST["type"];


$sql = "UPDATE gender SET type='$type' WHERE id=$id";

// echo $sql;

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:gender-create-list.php");
}
