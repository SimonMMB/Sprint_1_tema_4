<?php
//Sprint 1, topic 4, level 1
echo "<h2> Sprint 1, topic 4, level 1 </h2>";

//Exercise 1
echo "<h3> EXERCISE 1 </h3>";
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

//Exercise 2
echo "<h3> EXERCISE 2 </h3>";
class Shape {
    private float $height;
    private float $whidth;
    public function __construct(float $height, float $whidth) {
        $this->height = $height;
        $this->whidth = $whidth;
    }
    public function getHeight() : float {
        return $this->height;
    }    
    public function getWidth() : float {
        return $this->whidth;
    }
    public function setHeight(float $height) {
        $this->name = $height;
    }
    public function setWidth(float $whidth) {
        $this->whidth = $whidth;
    }
}
class Triangle extends Shape {
    public function __construct(float $height, float $whidth) {
        parent::__construct($height, $whidth);
    }
    function areaTriangle(float $height, float $width) : float {
        $area = $height * $width / 2;
        return $area;
    }
}
class Rectangle extends Shape {
    public function __construct(float $height, float $whidth) {
        parent::__construct($height, $whidth);
    }
    function areaRectangle(float $height, float $width) : float {
        $area = $height * $width;
        return $area;
    }
}