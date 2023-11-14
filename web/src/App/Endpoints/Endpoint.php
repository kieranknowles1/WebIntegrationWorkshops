<?php

namespace App\Endpoints;

/**
 * Base class for all API endpoints
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
abstract class Endpoint
{
    private mixed $data;

    abstract public function getSupportedMethods(): array;

    public function __construct()
    {
        $this->checkParams();
    }

    public function checkParams(): void
    {
        if (!empty($_GET) || !empty($_POST)) {
            throw new \App\ClientError(400);
        }
    }

    final public function getData(): mixed
    {
        if (!in_array(\App\Request::getMethod(), $this->getSupportedMethods())) {
            // It gets worse
            return (new \App\ClientError(405))->getMessage();
        } elseif (\app\Request::getMethod() === 'OPTIONS') {
            return null;
        } else {
            return $this->realGetData();
        }
    }

    // Awful way of doing this, but i'm lazy
    // I'm not sure if this is even a good idea
    // Oh dear...
    abstract protected function realGetData(): mixed;

    public function getCode(): int
    {
        return 200;
    }

    public function outputHeaders(): void
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: https://w20013000.nuwebspace.co.uk');
        $methodsStr = implode(', ', $this->getSupportedMethods()) . ', OPTIONS';
        header("Access-Control-Allow-Methods: $methodsStr");
        http_response_code($this->getCode());
    }
}
