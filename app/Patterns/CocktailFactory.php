<?php

namespace App\Patterns;

abstract class CocktailFactory
{
    abstract public function glass(): Glass;
    abstract public function alcohol(): Alcohol;
    abstract public function inside(): Inside;
    abstract public function garnish(): Garnish;

    public function mix(): void
    {
        $this->glass()->prepare();
        $this->alcohol()->pour();
        $this->inside()->add();
        $this->garnish()->add();
    }

}
