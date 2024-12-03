<?php
//Sprint 1, topic 4: POO 1

//Exercise 1

class Employee {
    private string $name;
    private float $salary;
    public function __construct(string $name, float $salary) {
        $this->name = $nombre;
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
    public function initialize(string $name, float $salary) : string {
        $newEployee = new Employee($name, $salary);
        $message = $name . " was added to employees list <br>";
        return $message;
    }
    public function print(string $name, float $salary) : string {
        if ($salary > 6000) {
            $message = $name . " must pay taxes <br>";
        } else {
            $message = $name . " is tax exempt <br>";
        }
        return $message;
    }
}
?>