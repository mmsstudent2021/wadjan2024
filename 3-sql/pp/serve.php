<?php

echo "I'm serve";

$port = 8090;
$startingPath = __DIR__ . "/public";

exec("php -S localhost:$port -t $startingPath");
