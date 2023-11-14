<?php

ini_set('display_errors', 1);

require '../autoload.php';

class WhereAmiEndpoint extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }
    protected function realGetData(): mixed
    {
        return [
            'endpoint' => Request::getEndpointName(),
            'method' => $_SERVER['REQUEST_METHOD'],
            'message' => "Endpoint not found",
            'fault' => 'you',
        ];
    }
}

class FactsEndpoint extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }
    protected function realGetData(): mixed
    {
        $facts = [
            "Studies have shown that 90% of programming issues are fixed by yelling at the computer until the developer realizes they're the one who messed up.",
            "The number of gay pirate assassins is higher than you might think.",
            "80% of statistics are made up on the spot.",
            "The average person has one fallopian tube. I don't know what that is.",
            "50% of dogs are good boys.",
            "Averages are meaningless. For example, the average person has one testicle.",
            "If you drive off with less than £10 of petrol, most places won't bother chasing you. I have 200 jerry cans in my garage.",
            "If you need to get home after a night out, take the bus. That way it won't be your insurance that's invalid.",
            "It's Tuesday. If you're reading this and it isn't Tuesday, try again tomorrow.",
            "See that goat headbutting the fence. I don't know what he's thinking, but it isn't very much from the looks of it.",
            "If you want something and can't pay for it, just take it.",
            "If you're doing tax evasion, don't tell someone who works at HMRC or you'll have to give them a cut.",
            "If someone offers you a bribe, take it and then report them to the police.",
            "When a ship is sinking, it's the captain's job to test the lifeboats.",
            "I have no idea what my code does, I just copy from Stack Overflow and ChatGPT",
            "418 can be considered a substitute for 405",
            "You can get through any door with 2 cups of coffee, a lanyard, and some confidence.",
            "If you ask for nein bottles of beer in germany, you'll get nein bottles and won't pay a cent.",
            "If you see a debate between two people, try to find a compromise that unites them against you. For example, arrays should start at 0.5.",
            "If you can't find a compromise, sit back and enjoy the show.",
            "People with guilty consciences are more easily startled by incomplete",
            "Programming is the art of taking the wrong approach and making it work anyway.",
            "Any library can do anything if you abuse it enough.",
            "English is a mess, I blame the French.",
            "If you don't have a plan you don't know what you're doing. Therefore, you can't be doing it wrong.",
            "The British have a tradition of invading other countries for food they don't like, then coming up with a god forsaken recipe such as deep fried mars bars.",
        ];
        $sources = [
            null,
            "null",
            "I made it up",
            "Just Google it",
            "I'm not sure, but I think it's true",
            "Other, please specify",
            "I saw it in a book once, I can't remember if the book was fiction or not",
            "What's a source?",
            "Why would you want to put a sauce on json?",
        ];
        return [
            "fact" => $facts[array_rand($facts)],
            "source" => $sources[array_rand($sources)],
        ];
    }
}

class PostOfficeEndpoint extends Endpoint
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

function checkMethod($method, $allowed)
{
    if (!in_array($method, $allowed)) {
        throw new ClientError(405);
    }
}

function getEndpoint($name, $method): Endpoint
{
    switch ($name) {
        case '/facts': return new FactsEndpoint();
        case '/developer': return new DeveloperEndpoint();
        case '/where': return new WhereAmIEndpoint();
        case '/postoffice': return new PostOfficeEndpoint();
        default: throw new ClientError(404);
    }
}

$endpointName = Request::getEndpointName();

try {
    $endpoint = getEndpoint($endpointName, Request::getMethod());
    $endpoint->outputHeaders();
    echo json_encode($endpoint->getData());
} catch (ClientError $e) {
    http_response_code($e->getCode());
    header('Content-Type: application/json');
    echo json_encode([
        'message' => $e->getMessage(),
    ]);
}
