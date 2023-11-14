<?php

require_once "../autoload.php";

$endpoint = new Films();
$response = new Response($endpoint);

$response->outputJson();
