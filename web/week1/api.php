<?php

header('Content-Type: application/json');

$data = [
    'id' => 'w20013000',
    'name' => 'Kieran Knowles',
    'modules' => [
        'KC6012',
        'KF6012',
        'KF6013',
    ],
    'message' => 'Hello from an API!',
    'mirror' => $_GET['mirror'],

];

echo json_encode($data);
