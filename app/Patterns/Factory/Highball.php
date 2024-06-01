<?php

namespace App\Patterns\Factory;

class Highball implements Glass
{
    public function prepare(): void
    {
        echo "Using a highball glass\n";
    }
}
