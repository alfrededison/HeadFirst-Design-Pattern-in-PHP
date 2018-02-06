<?php
/**
 * User: isaac
 * Date: 06/02/2018
 * Time: 10:14 AM
 */

namespace Headfirst\Ingredients;


class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FreshClams();
    }
}
