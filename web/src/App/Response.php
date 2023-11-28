<?php

namespace App;

/**
 * A response from the API
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
class Response
{
    private Endpoints\Endpoint $endpoint;

    public function __construct(Endpoints\Endpoint $endpoint)
    {
        $this->endpoint = $endpoint;
        $this->setHeaders();
    }

    private function setHeaders(): void
    {
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");
    }

    public function outputJson(): void
    {
        echo json_encode($this->endpoint->getData());
    }
}
