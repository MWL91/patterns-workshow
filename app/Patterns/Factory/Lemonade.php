<?php

namespace App\Patterns\Factory;

class Lemonade implements Inside
{
    public function add(): void
    {
        echo "Adding lemonade\n";
    }
}
