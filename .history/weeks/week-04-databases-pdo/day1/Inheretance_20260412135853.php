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
        return "The name of the animal is {$}";
    }
}