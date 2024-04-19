<?php


require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/router/web.php";


routing($routes);


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


// $path = $_SERVER['PATH_INFO'] ?? "/";

// if ($path === "/") {
//     $file = "./views/home.php";
// } else if ($path === "/about-us") {
//     $file = "./views/about.php";
// } else if ($path === "/services") {
//     $file = "./views/services.php";
// } else {
//     $file = "./views/not-found.php";
// }

// echo "<pre>";


// view($routes[$path] ?? "not-found");
