<?php


$columns = ["a","b","c"];

// echo implode(",",$arr);
$result = is_array($columns) ? implode(",", $columns) : $columns;

var_dump($result);