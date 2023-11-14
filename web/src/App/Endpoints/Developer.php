<?php

namespace App\Endpoints;

/**
 * Endpoint to get developer information
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
class Developer extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }

    public function realGetData(): mixed
    {
        return [
            'name' => 'Kieran Knowles',
            'student_id' => 'w20013000',
        ];
    }
}
