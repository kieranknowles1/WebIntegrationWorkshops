<?php

require_once "../autoload.php";

// Create an instance of NewClass
// As this is defined in a different file, it will be loaded by the autoloader
$instance = new NewClass();
$instance->publicProperty = "Anyone can change this";

echo "\$instance->publicProperty: $instance->publicProperty<br>";
echo "\$instance->getPrivateProperty(): {$instance->getPrivateProperty()}<br>";
