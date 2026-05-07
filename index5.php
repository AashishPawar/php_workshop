<?php

class Employee {
    private $salary;

    function __construct($salary) {
        $this->salary = $salary;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function getSalary() {
        return $this->salary;
    }

    function printSalary() {
        echo "Salary: " . $this->salary."<br>";
    }
}

$emp = new Employee(20000);

$emp->setSalary(30000);

echo $emp->getSalary() . "<br>";

$emp->printSalary();

?>




<?php

class Vehicle {
    protected $type;

    function __construct($type) {
        $this->type = $type;
    }

    public function showType() {
        echo "Vehicle Type: " . $this->type . "<br>";
    }
}

class ElectricVehicle extends Vehicle {

    function display() {
        echo "This is an Electric " . $this->type."<br>";
    }
}

$ev = new ElectricVehicle("Car");

$ev->showType();
$ev->display();

?>


<?php

class Person {
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    private $score;

    function __construct($name, $score) {
        parent::__construct($name);
        $this->score = $score;
    }

    function showData() {
        echo "Name: " . $this->name . "<br>";
        echo "Score: " . $this->score;
    }
}

$stu = new Student("Khushal", 85);
$stu->showData();

?>