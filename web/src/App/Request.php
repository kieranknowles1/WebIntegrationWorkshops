<?php

namespace App;

abstract class Request
{
    private function __construct()
    {
        assert(false);
    }

    public static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function getEndpointName(): string
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return preg_replace(\Settings::API_ROOT_PATTERN, '', $path);
    }
}
