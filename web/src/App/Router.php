<?php

namespace App;

/**
 * Class to route requests to the correct endpoint
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
abstract class Router
{
    private function __construct() {}

    public static function route(): Endpoints\Endpoint
    {
        return match(Request::getEndpointName()) {
            '/facts' => new Endpoints\Facts(),
            '/films' => new Endpoints\Films(),
            '/developer' => new Endpoints\Developer(),
            '/where' => new Endpoints\WhereAmI(),
            '/postoffice' => new Endpoints\PostOffice(),
            default => throw new ClientError(404),
        };
    }
}
