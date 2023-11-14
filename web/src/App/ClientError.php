<?php

namespace App;

class ClientError extends \RuntimeException
{
    private const MESSAGES = [
        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
    ];

    private int $responseCode;

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function __construct($responseCode)
    {
        $this->responseCode = $responseCode;
        parent::__construct(self::MESSAGES[$responseCode]);
    }
}
