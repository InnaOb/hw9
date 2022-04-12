<?php

namespace Hillel\Food;

final class BeefShawarma extends Shawarma
{
    protected string $title = 'Шаурма говяжья';
    protected float $costs = 75;
    protected array $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'];
}