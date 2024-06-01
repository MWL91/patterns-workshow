<?php

namespace Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Patterns\Mojito;
use Tests\TestCase;

class CocktailFactoryTest extends TestCase
{
    public function test_can_mix_mojito(): void
    {
        $mojito = new Mojito();
        $mojito->mix();
        $this->assertTrue(true);
    }
}
