<?php

namespace Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Patterns\Factory\Mojito;
use Tests\TestCase;

class CocktailFactoryTest extends TestCase
{
    public function test_can_mix_mojito(): void
    {
        $mojito = new Mojito();
        $mojito->mix();

        $this->expectOutputString("Using a highball glass\nPouring rum (40ml)\nAdding lemonade\nSome mint leaves on top\n");
    }
}
