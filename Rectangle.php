<?php
//Sprint 1, topic 4: POO 1

//Exercise 2
require_once 'Shape.php';
class Rectangle extends Shape {
    public function __construct(float $height, float $width) {
        parent::__construct($height, $width);
    }
    public function areaRectangle() : float {
        $area = $this->getHeight() * $this->getWidth();
        return $area;
    }
}
$newRectangle = new Rectangle(10, 4);
echo "Area rectangle = " . $newRectangle->areaRectangle() . " cm2 \n";
?>