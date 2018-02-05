<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:16 PM
 */

namespace Headfirst\Stores;

use Headfirst\Pizza\{Pizza, NYStyleCheesePizza, NYStylePepperoniPizza, NYStyleClamPizza, NYStyleVeggiePizza};

class NYStylePizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case self::TYPE_CHEESE:
                return new NYStyleCheesePizza();
            case self::TYPE_PEPPERONI:
                return new NYStylePepperoniPizza();
            case self::TYPE_CLAM:
                return new NYStyleClamPizza();
            case self::TYPE_VEGGIE:
                return new NYStyleVeggiePizza();
            default:
                return null;
        }
    }
}
