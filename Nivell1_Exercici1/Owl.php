<?php
declare(strict_types=1);

require_once 'Animal.php';

class Owl extends Animal {
    public function speak(): string {
        return $this->getName() . " diu: ¡Uu Uu Uu!";
    }
}