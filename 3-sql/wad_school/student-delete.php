<?php


require_once "./db_connect.php";

$id = $_GET["row_id"];



// sql

$sql = "DELETE FROM batches WHERE id = $id ";

// die($sql);

// die($sql);


// query

$query = mysqli_query($conn, $sql);

// var_dump($query);
// die();


if ($query) {
    header("Location:batch-list.php");
}
