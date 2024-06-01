<?php

namespace App\Patterns\Factory;

class Mojito extends CocktailFactory
{
    public function glass(): Glass
    {
        return new Highball();
    }

    public function alcohol(): Alcohol
    {
        return new Rum(40);
    }

    public function inside(): Inside
    {
        return new Lemonade();
    }

    public function garnish(): Garnish
    {
        return new Mint();
    }
}
