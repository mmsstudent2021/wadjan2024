<?php


require_once "./db_connect.php";

$id = $_GET["row_id"];

// sql

$sql = "DELETE FROM nationality WHERE id = $id ";


// query

$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:nationality-create-list.php");
}
