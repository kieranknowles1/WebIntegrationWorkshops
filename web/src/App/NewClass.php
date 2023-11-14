<?php

namespace App;

/**
 * Example class, demonstrating the use of public and private properties.
 * and the autoloader.
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to generate this class.
 */
class NewClass
{
    public string $publicProperty = "Anyone can see this";
    private string $privateProperty = "It's a secret to everyone else, but I give you a getter";

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}
