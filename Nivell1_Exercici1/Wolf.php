<?php
declare(strict_types=1);

require_once 'Animal.php';

class Wolf extends Animal {
    public function speak(): string {
        return $this->getName() . " diu: ¡Auuu! ¡Auuu!";
    }
}