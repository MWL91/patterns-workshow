<?php

namespace App\Patterns\Factory;

class Mint implements Garnish
{
    public function add()
    {
        echo "Some mint leaves on top\n";
    }
}
