<?php 

class Person {
    public $name;
    public $age;
    public $city;

    public function __construct($name, $age, $city) {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
}

$person = new Person("John Doe", 30, "New York");

foreach ($person as $property => $value) {
    echo "$property: $value<br>";
}





?>