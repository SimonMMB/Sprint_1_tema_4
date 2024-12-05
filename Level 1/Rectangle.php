<?php
declare(strict_types = 1);
//Sprint 1, topic 4: POO 1

//Exercise 2
require_once 'Shape.php';
class Rectangle extends Shape {
    public function areaRectangle() : float {
        $area = $this->getHeight() * $this->getWidth();
        return $area;
    }
}
?>