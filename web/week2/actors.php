<?php
require_once('getConnection.php');

header('Content-Type: application/json');

// Get the search query from the request parameters. If it's not set, use an empty string to get all actors
$search = $_GET['search'] ?? '';

// Connect to the database
$db = getConnection();

// Prepare the SQL statement to search for actors
$statement = $db->prepare('SELECT actor_id, first_name, last_name
                           FROM actor
                           WHERE first_name LIKE :search OR last_name LIKE :search
');

$statement->execute([
    ':search' => "%$search%",
]);

// Return the results as JSON
echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
