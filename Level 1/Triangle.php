<?php
declare(strict_types = 1);
//Sprint 1, topic 4: POO 1

//Exercise 2
require_once 'Shape.php';
class Triangle extends Shape {
    public function areaTriangle() : float {
        $area = $this->getHeight() * $this->getWidth() / 2;
        return $area;
    }
}
?>