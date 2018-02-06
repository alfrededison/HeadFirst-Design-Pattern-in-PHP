<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:16 PM
 */

namespace Headfirst\Stores;

use Headfirst\Ingredients\ChicagoPizzaIngredientFactory;
use Headfirst\Pizza\{
    CheesePizza, ClamPizza, ModernPizza, PepperoniPizza, VeggiePizza
};

class ChicagoPizzaStore extends ModernPizzaStore
{

    protected function createPizza(string $type): ModernPizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type) {
            case self::TYPE_CHEESE:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                break;
            case self::TYPE_PEPPERONI:
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago Style Pepperoni Pizza');
                break;
            case self::TYPE_CLAM:
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                break;
            case self::TYPE_VEGGIE:
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');
                break;
            default:
                return null;
        }

        return $pizza;
    }
}
