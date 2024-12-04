<?php
declare(strict_types = 1);
//Sprint 1, topic 4: POO 1

//Exercise 1
class Employee {
    private string $name;
    private float $salary;
    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName() : string {
        return $this->name;
    }    
    public function getSalary() : float {
        return $this->salary;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setSalary(float $salary) {
        $this->salary = $salary;
    }
    public static function initialize(string $name, float $salary) : Employee {
        $newEmployee = new Employee($name, $salary);
        return $newEmployee;
    }
    public function print() : string {
        if ($this->salary > 6000) {
            $message = $this->name . " must pay taxes. \n";
        } else {
            $message = $this->name . " is tax exempt. \n";
        }
        return $message;
    }
}
$employee1 = Employee::initialize("Juan Perez", 1800);
echo $employee1->print();
$employee2 = Employee::initialize("Ana Lopez", 7000);
echo $employee2->print();
?>