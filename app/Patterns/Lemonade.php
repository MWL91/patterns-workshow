<?php

namespace App\Patterns;

class Lemonade implements Inside
{
    public function add(): void
    {
        echo "Adding lemonade\n";
    }
}
