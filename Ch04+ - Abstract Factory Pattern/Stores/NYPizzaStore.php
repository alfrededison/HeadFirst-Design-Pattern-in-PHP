<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:16 PM
 */

namespace Headfirst\Stores;


use Headfirst\Ingredients\NYPizzaIngredientFactory;
use Headfirst\Pizza\{
    CheesePizza, ClamPizza, ModernPizza, PepperoniPizza, VeggiePizza
};

class NYPizzaStore extends ModernPizzaStore
{

    protected function createPizza(string $type): ModernPizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case self::TYPE_CHEESE:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');
                break;
            case self::TYPE_PEPPERONI:
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('New York Style Pepperoni Pizza');
                break;
            case self::TYPE_CLAM:
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');
                break;
            case self::TYPE_VEGGIE:
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('New York Style Veggie Pizza');
                break;
            default:
                return null;
        }

        return $pizza;
    }
}
