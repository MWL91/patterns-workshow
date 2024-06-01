<?php

namespace App\Patterns;

class CubaLibre extends CocktailFactory
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
        return new Cola();
    }

    public function garnish(): Garnish
    {
        return new Lime();
    }
}
