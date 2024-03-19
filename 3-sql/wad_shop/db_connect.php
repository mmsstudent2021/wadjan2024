<?php 

$conn = mysqli_connect("localhost", "hhz", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}