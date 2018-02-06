<?php
/**
 * User: isaac
 * Date: 06/02/2018
 * Time: 10:14 AM
 */

namespace Headfirst\Ingredients;


class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new Eggplant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FrozenClams();
    }
}
