<?php

namespace App;

/**
 * Endpoint to get module details
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
class Details extends Endpoint
{
    public function getSupportedMethods()
    {
        return ['GET'];
    }

    public function realGetData(): mixed
    {
        return [
            "code" => "KF6012",
            "title" => "Web Application Integration",
        ];
    }
}
