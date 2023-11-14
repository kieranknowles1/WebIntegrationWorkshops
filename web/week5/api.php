<?php

ini_set('display_errors', 1);

require '../settings.php';
require '../autoload.php';

$endpoint = App\Router::route();
$endpoint->outputHeaders();
echo json_encode($endpoint->getData());
