<?php
//Sprint 1, topic 4: POO 1

//Exercise 2

class Rectangle extends Shape {
    public function __construct(float $height, float $whidth) {
        Shape::__construct($height, $whidth);
    }
    function areaRectangle(float $height, float $width) : float {
        $area = $this->getHeight() * $this->getWidth();
        return $area;
    }
}
?>
