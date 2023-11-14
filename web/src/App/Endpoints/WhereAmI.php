<?php

namespace App\Endpoints;

class WhereAmI extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }
    protected function realGetData(): mixed
    {
        return [
            'endpoint' => \App\Request::getEndpointName(),
            'method' => $_SERVER['REQUEST_METHOD'],
            'message' => "Endpoint not found",
            'fault' => 'you',
        ];
    }
}
