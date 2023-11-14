<?php

namespace App\Endpoints;

class PostOffice extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['POST'];
    }
    protected function realGetData(): mixed
    {
        return [
            "message" => "We lost your package, sorry",
            // From form data
            "package" => $_POST['package'],
        ];
    }
}
