<?php
//Sprint 1, topic 4: POO 1

//Exercise 2
require_once 'Shape.php';
class Triangle extends Shape {
    public function __construct(float $height, float $width) {
        parent::__construct($height, $width);
    }
    public function areaTriangle() : float {
        $area = $this->getHeight() * $this->getWidth() / 2;
        return $area;
    }
}
$newTriangle = new Triangle(10, 4);
echo "Area triangle = " . $newTriangle->areaTriangle() . " cm2 \n";
?>