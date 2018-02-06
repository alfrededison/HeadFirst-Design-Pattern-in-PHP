<?php
/**
 * User: isaac
 * Date: 06/02/2018
 * Time: 10:03 AM
 */

namespace Headfirst\Ingredients;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClams(): Clams;
}