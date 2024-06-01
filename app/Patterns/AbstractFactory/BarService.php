<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\Factory\CocktailFactory;

class BarService
{
    public function __construct(
        private CocktailFactory $cocktail
    )
    {
    }

    public function prepareCocktail(): void
    {
        $this->cocktail->mix();
    }

    public function getGlassType(): void
    {
        // W normalnej apce tu powinien być string z nazwą szkła
        $this->cocktail->glass()->prepare();
    }
}
