<?php

// parent class 
class Animal{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function eat()
    {
        return "{$this->name} is eating.";
    } 
    public function getInfo()
    {
        return "The name of the animal is {$this->name} and it it age is {$this->age}.";
    }
}

// child class

class Dog extends Animal{
    private $breed;

    public function __construct($name, $age)
    {
    }

    public function getInfo()
    {
        return "The name of the animal is {$this->name} and it it age is {$this->age}.";
    }

}

$dog1 = new Dog("Buddy", 3);
echo $dog1->getInfo();