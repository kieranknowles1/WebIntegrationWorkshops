<?php

require_once "../autoload.php";

$endpoint = new Details();
$database = new Database("../data/database.sqlite");
$response = new Response($endpoint);

$response->outputJson();
