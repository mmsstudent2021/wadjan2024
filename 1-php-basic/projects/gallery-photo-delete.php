<?php


$folderName = "photos";
$file = $_GET["file_name"];

if (unlink($folderName . "/" . $file)) {
    header("Location:gallery.php");
}
