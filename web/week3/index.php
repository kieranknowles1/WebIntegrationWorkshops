<?php

require_once "../autoload.php";

set_exception_handler(function (Throwable $e) {
    echo "Uncaught exception: " . $e->getMessage() . " on line " . $e->getLine() . " in file " . $e->getFile() . "<br>";
    echo $e->getCode() . "<br>";
    echo $e->getTraceAsString() . "<br>";
});

// DatabaseConnection is autoloaded from lib/DatabaseConnection.php
$connection = DatabaseConnection::getInstance();
// Do something with $connection
// This is not allowed as the constructor is private
//$connection2 = new DatabaseConnection();

// This class is abstract. It cannot be instantiated directly.
abstract class MyClass
{
    public function sayHello()
    {
        echo "Hello World!";
    }

    // This method is abstract. Derived classes must implement it or be abstract themselves.
    abstract public function sayGoodbye();

    private string $owner;
    public function setOwner(string $owner)
    {
        $this->owner = $owner;
    }
    public function getOwner(): string
    {
        return $this->owner;
    }
};

class MyDerivedClass extends MyClass
{
    // Override the base class method
    public function sayHello()
    {
        echo "Hello Universe!";
    }

    // Implement the abstract method from the base class
    public function sayGoodbye()
    {
        echo "Goodbye!";
    }
};

// This function accepts an instance of MyClass or any derived class
function acceptBaseClass(MyClass $instance)
{
    $instance->sayHello();
    $instance->sayGoodbye();
}
$instance = new MyDerivedClass();
$instance->setOwner("Alan");
$instance2 = new MyDerivedClass();
$instance2->setOwner("Barry");
acceptBaseClass($instance);
