<?php

// echo "I'm index";

// path based routing
// "/" => view/home.php
// "/about-us" => view/about.php
// "/services" => view/services.php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo $_SERVER['REQUEST_URI'];
// echo "<br>";
// echo $_SERVER['PATH_INFO'] ?? "/";


$path = $_SERVER['PATH_INFO'] ?? "/";

if ($path === "/") {
    require_once "./views/home.php";
} else if ($path === "/about-us") {
    require_once "./views/about.php";
} else if ($path === "/services") {
    require_once "./views/services.php";
} else {
    require_once "./views/not-found.php";
}
