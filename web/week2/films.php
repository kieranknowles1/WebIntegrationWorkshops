<?php
require_once "getConnection.php";

// Signal that the content is JSON
header('Content-Type: application/json');

// Open films.sqlite
$db = getConnection();

// Get the search term from the query string
// Coalesce operator (??) treats missing search term as empty string and missing category/language as null
$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? null;
$language = $_GET['language'] ?? null;

// Get all films with a title that contains the search term
$statement = $db->prepare('SELECT film.title,
                                  film.description,
                                  film.release_year,
                                  film.length,
                                  film.rating,
                                  category.name AS category,
                                  language.name AS language,
                                  json_group_array(actor.first_name || " " || actor.last_name) AS actor_names,
                                  json_group_array(actor.actor_id) AS actor_ids
                            FROM film
                            LEFT JOIN category ON film.category_id = category.category_id
                            LEFT JOIN language ON film.language_id = language.language_id
                            LEFT JOIN film_actor ON film.film_id = film_actor.film_id
                            LEFT JOIN actor ON film_actor.actor_id = actor.actor_id
                            WHERE title LIKE :search AND
                                  :category IS NULL OR category.name = :category AND
                                  :language IS NULL OR language.name = :language
                            GROUP BY film.film_id
');
$statement->execute([
    ':search' => "%$search%",
    ':category' => $category,
    ':language' => $language,
]);

// Return results as JSON
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
// Convert actor_ids and actor_names to actors array
// FIXME: I don't like how this decodes JSON only to encode it again. Theres probably a better way of doing this
foreach ($results as &$result) {
    $ids = json_decode($result['actor_ids']);
    $names = json_decode($result['actor_names']);
    $result['actors'] = array_map(function ($id, $name) {
        return ['id' => $id, 'name' => $name];
    }, $ids, $names);
    unset($result['actor_ids']);
    unset($result['actor_names']);
}

echo json_encode($results);
