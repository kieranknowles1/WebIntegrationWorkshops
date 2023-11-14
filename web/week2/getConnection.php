<?php

// Return JSON on exception
// FIXME: This should be in its own file
set_exception_handler(function (Exception $e) {
    echo json_encode([
        'error' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);
    exit;
});


function getConnection(): PDO {
    // Open films.sqlite
    $db = new PDO('sqlite:films.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
