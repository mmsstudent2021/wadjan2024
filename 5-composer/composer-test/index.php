<?php



require_once "./vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();

$res = $client->request("GET", "https://fakestoreapi.com/products/1");

$data = $res->getBody();

echo $res->getBody();

// print_r($data);

// use Monolog\Handler\StreamHandler;
// use Monolog\Level;
// use Monolog\Logger;


// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('my.log', Level::Warning));

// // add records to the log
// $log->warning('Hein Htet Zan');
// $log->error('San kyi tar');