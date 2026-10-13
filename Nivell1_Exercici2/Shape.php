<?php
/*
Exercici 2 del Nivell 1 a POO1, però aquí necessitem que ho resolguis aplicant Classes Abstractes, Herència, Abstracció o Interfícies.
*/
declare (strict_types=1);

abstract class Shape {
 protected float $width;
 protected float $height;

 public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
}
abstract public function area(): float;
}

class Rectangle extends Shape {
    public function area() : float{
        return $this->width * $this->height;
    }
}

class Triangle extends Shape {
    public function area() : float{
        return $this->width * $this->height / 2;
    }
}