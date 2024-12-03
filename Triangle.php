<?php
//Sprint 1, topic 4: POO 1

//Exercise 2

class Triangle extends Shape {
    public function __construct(float $height, float $width) {
        parent::__construct($height, $width);
    }
    function areaTriangle() : float {
        $area = $this->getHeight() * $this->getWidth() / 2;
        return $area;
    }
}

$newTriangle = new Triangle(10, 4);
echo "The area of the triangle is: " . $newTriangle->areaTriangle();


?>