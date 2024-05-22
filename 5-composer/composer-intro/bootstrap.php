<?php

use Symfony\Component\Dotenv\Dotenv;


require_once  __DIR__ . "/vendor/autoload.php";


$donEnv = new Dotenv();
$donEnv->load(__DIR__ . "/.env");
