<?php

spl_autoload_register(function ($class) {
    $path = Settings::SOURCE_PATH . str_replace("\\", "/", $class) . ".php";
    if (is_readable($path)) {
        require_once($path);
        return true;
    }
    return false;
});

/**
 * Log exceptions as JSON
 *
 * @generated GitHub Copilot was used to assist in writing this code
 * @author Kieran Knowles
 */
set_exception_handler(function (Throwable $exception): void {
    header("Content-Type: application/json");
    http_response_code(500);
    echo json_encode([
        'error' => $exception->getMessage(),
        'file' => $exception->getFile(),
        'line' => $exception->getLine(),
        'trace' => $exception->getTrace(),
    ]);
});

/**
 * Convert errors (e.g., undefined variable) to exceptions
 *
 * @generated GitHub Copilot was used to assist in writing this code
 * @author Kieran Knowles
 */
set_error_handler(function (int $severity, string $message, string $file, int $line): void {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
