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
        $sql = "SELECT film.title, film.rating, film.description, category.name AS category FROM film JOIN category ON film.category_id = category.id";
        $connection = new \App\Database(\Settings::FILMS_DATABASE);
        return $connection->executeSql($sql);
    }
}
