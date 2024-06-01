<?php

namespace Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Patterns\AbstractFactory\BarService;
use App\Patterns\Factory\CocktailFactory;
use App\Patterns\Factory\CubaLibre;
use App\Patterns\Factory\Mojito;
use Tests\TestCase;

class CocktailAbstractFactoryTest extends TestCase
{
    public static function cocktailProvider(): \Generator
    {
        yield [new Mojito(), "Using a highball glass\nPouring rum (40ml)\nAdding lemonade\nSome mint leaves on top\n"];
        yield [new CubaLibre(), "Using a highball glass\nPouring rum (40ml)\nSome cola\nA slice of lime on the rim\n"];
    }

    /**
     * @dataProvider cocktailProvider
     */
    public function test_can_use_abstract_factory(CocktailFactory $cocktail, string $recipe): void
    {
        // Given:
        $service = new BarService($cocktail);

        // When:
        $service->prepareCocktail();

        // Then:
        $this->expectOutputString($recipe);
    }
}
