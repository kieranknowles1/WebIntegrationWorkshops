<?php
require_once "getConnection.php";
header("Content-Type: application/json");

$id = $_GET['id'] ?? null;
if ($id == null) {
    throw new Exception("No id given");
}

$conn = getConnection();

$statement = $conn->prepare("SELECT film.film_id, film.title FROM film_actor
                                LEFT JOIN film ON film_actor.film_id = film.film_id
                                WHERE film_actor.actor_id = :id
");

$statement->execute([
    ':id' => $id,
]);

echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
