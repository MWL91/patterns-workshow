<?php

namespace App\Patterns;

class Rum implements Alcohol
{
    public function __construct(
        private int $mililiters
    )
    {
    }

    public function pour(): void
    {
        echo "Pouring rum (".$this->mililiters."ml)\n";
    }
}
