<?php 

$conn = mysqli_connect("localhost", "hhz", "asdffdsa", "wad_school");

if (!$conn) {
    die(mysqli_connect_errno());
}