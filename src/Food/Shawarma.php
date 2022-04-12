<?php

namespace Hillel\Food;

class Shawarma
{
    protected float $costs;
    protected array $ingredients = [];
    protected string $title;

    public function getCost(): float
    {
        return $this->costs;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}