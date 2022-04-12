<?php

namespace Hillel\Food;

class ShawarmaCalculator
{
    protected array $basket = [];
    protected array $ingredients = [];
    protected float $price = 0;

    public function getBasket(): array
    {
        return $this->basket;
    }

    protected function setBasket(string $shawarma): void
    {
        if (!in_array($shawarma, $this->getBasket())) {
            $this->basket[] = $shawarma;
        }
    }

    public function getPrice(): float|int
    {
        return $this->price;
    }

    public function setPrice(float|int $price): void
    {
        $this->price = $price;
    }

    public function price(float $price): void
    {
        $this->setPrice($this->getPrice() + $price);
    }

    public function add(Shawarma $shawarma)
    {
        $this->setBasket($shawarma->getTitle());
        $this->price($shawarma->getCost());
        $this->ingredients[] = $shawarma->getIngredients();
    }

    public function ingredients(): array
    {
        return array_unique(array_merge(...$this->ingredients));
    }

}