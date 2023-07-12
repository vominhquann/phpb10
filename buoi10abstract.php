<?php
//1
echo "1<br>";
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius ** 2;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(2);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(3, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea() . "<br>";

//2
echo "<br>2<br>";
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "woof<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "meow<br>";
    }
}


$dog = new Dog();
$dog->makeSound(); 

$cat = new Cat();
$cat->makeSound(); 

//3
echo "<br>3<br>";
abstract class Employee {
    private $name;
    private $salary;

    abstract public function getRole();

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Manager extends Employee {
    public function getRole() {
        return "Manager";
    }
}

class Staff extends Employee {
    public function getRole() {
        return "Staff";
    }
}

$manager = new Manager();
$manager->setName("Sep Quan");
$manager->setSalary(5000);

echo "Employee: " . $manager->getName() . "<br>";
echo "Role: " . $manager->getRole() . "<br>";
echo "Salary: $" . $manager->getSalary() . "<br>";

$staff = new Staff();
$staff->setName("nhan vien vip");
$staff->setSalary(50);

echo "Employee: " . $staff->getName() . "<br>";
echo "Role: " . $staff->getRole() . "<br>";
echo "Salary: $" . $staff->getSalary() . "<br>";

//4
echo "<br>4<br>";
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car started. Ignition on.<br>";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle started. Kick-started.<br>";
    }
}


$car = new Car();
$car->start();

$motorcycle = new Motorcycle();
$motorcycle->start();

//5
echo "<br>5<br>";
abstract class Database {
    abstract public function connect();
    abstract public function query();
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        echo "Connecting to MySQL database...<br>";
    }

    public function query() {
        echo "Executing MySQL query...<br>";
    }

    public function disconnect() {
        echo "Disconnecting from MySQL database...<br>";
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Connecting to PostgreSQL database...<br>";
    }

    public function query() {
        echo "Executing PostgreSQL query...<br>";
    }

    public function disconnect() {
        echo "Disconnecting from PostgreSQL database...<br>";
    }
}

$mysql = new MySQLDatabase();
$mysql->connect();
$mysql->query();
$mysql->disconnect();

$postgresql = new PostgreSQLDatabase();
$postgresql->connect();
$postgresql->query();
$postgresql->disconnect();

?>