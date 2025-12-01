<?php

namespace Perasser\Drinks;

class RandomDrink
{
    private array $drinks = ['Wasser', 'Saft', 'Tee'];

    public function getDrink(): string {
        return $this->drinks[array_rand($this->drinks)];
    }
}