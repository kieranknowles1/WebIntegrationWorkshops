<?php

require_once "../autoload.php";

$endpoint = new DeveloperEndpoint();
$response = new Response($endpoint);

$response->outputJson();
