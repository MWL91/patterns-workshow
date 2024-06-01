<?php

namespace App\Patterns;

class Highball implements Glass
{
    public function prepare(): void
    {
        echo "Using a highball glass\n";
    }
}
