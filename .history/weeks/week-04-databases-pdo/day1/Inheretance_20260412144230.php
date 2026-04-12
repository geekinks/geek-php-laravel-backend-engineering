<?php

// parent class 
class Animal
{
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

class Dog extends Animal
{
    private $breed;

    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }
}
class Bird extends Animal
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    public function getInfo()
    {
        return "The Bird Name is {$this->name}";
    }
}
$dog1 = new Dog("Buddy", 3);
echo $dog1->getInfo();

echo "<br/>";
$bird = new Bird("Tweet", 2);
echo $bird->getInfo();






// Parent class
class Shape
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function calculateArea()
    {
        return "Area calculation not implemented";
    }
}




// Child classes with different area calculations
class Rectangle extends Shape
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
class Circle extends Shape {
    private $radius;public function __construct($radius) {
    parent::__construct("Circle");
    $this->radius = $radius;
    }
    public function calculateArea() {
    return 3.14159 * $this->radius * $this->radius;
    }
    }
    class Triangle extends Shape {
        private $base;
        private $height;
        public function __construct($base, $height) {
        parent::__construct("Triangle");
        $this->base = $base;
        $this->height = $height;
        }
        public function calculateArea() {
        return 0.5 * $this->base * $this->height;
        }
        }