<?php


require_once "./db_connect.php";

$id = $_GET["row_id"];

// sql

$sql = "DELETE FROM products WHERE id = $id ";


// query

$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:product-create-list.php");
}
