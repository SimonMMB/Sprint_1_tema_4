<?php
declare(strict_types = 1);
//Sprint 1, topic 4: POO 1

//Exercise 2
class Shape {
    private float $height;
    private float $width;
    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }
    public function getHeight() : float {
        return $this->height;
    }    
    public function getWidth() : float {
        return $this->width;
    }
    public function setHeight(float $height) {
        $this->height = $height;
    }
    public function setWidth(float $width) {
        $this->width = $width;
    }
}
?>