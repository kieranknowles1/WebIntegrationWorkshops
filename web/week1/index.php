<?php

function greet(string $name): void
{
    echo("Hello, $name!<br>");
}

$phpversion = phpversion();
echo("Hello from PHP $phpversion!<br>");
greet("Kieran");

echo("We nearly have an up-to-date PHP version!<br>");
echo("That means we can fix the mistakes in early PHP such as dynamic typing!<br>");
echo("We even have nullable types!!! I'm so happy! I've been spoiled by C#!<br>");
echo("They have the ? on the wrong side of the type though...<br>");
echo("It's still better than playing guess the type or where does this null come from?<br>");

echo("Null was a billion dollar mistake. - Tony Hoare<br>");
echo("Dynamic typing is a trillion dollar mistake. - Kieran<br>");

echo("<a href='javascript.html'>Click here to see some JavaScript!</a>");

function fault(): string
{
    $choice = rand(0, 2);
    if ($choice == 0) {
        return 'client';
    } elseif ($choice == 1) {
        return 'server';
    } else {
        return 'god';
    }
}

// Handle uncaught exceptions as json or log them
set_exception_handler(function (Throwable $exception) {
    $fault = fault();
    if ($fault == 'client') {
        echo(json_encode([
            'error' => $exception->getMessage(),
        ]));
    } elseif ($fault == 'server') {
        error_log($exception->getMessage());
    } elseif ($fault == 'god') {
        echo('<p>Tell this to the gods:</p>');
        echo('<p>' . $exception->getMessage() . '</p>');
    }
});

// Open the database
$db = new PDO("sqlite:db.sqlite3");
// Throw exceptions on error
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $db->prepare('SELECT * FROM users WHERE name LIKE :name AND age > :age');
$statement->execute([
    ':name' => 'Kieran',
    ':age' => 20,
]);

echo(json_encode($statement->fetchAll(PDO::FETCH_ASSOC)));
