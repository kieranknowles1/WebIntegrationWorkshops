<?php

namespace App\Endpoints;

class Films extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }

    public function realGetData(): mixed
    {
        $sql = "SELECT * FROM film";
        $connection = new \App\Database(\Settings::FILMS_DATABASE);
        return $connection->executeSql($sql);
    }
}
