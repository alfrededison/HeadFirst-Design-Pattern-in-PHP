<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:16 PM
 */

namespace Headfirst\Stores;

use Headfirst\Pizza\{Pizza, ChicagoStyleCheesePizza, ChicagoStylePepperoniPizza, ChicagoStyleClamPizza, ChicagoStyleVeggiePizza};

class ChicagoStylePizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case self::TYPE_CHEESE:
                return new ChicagoStyleCheesePizza();
            case self::TYPE_PEPPERONI:
                return new ChicagoStylePepperoniPizza();
            case self::TYPE_CLAM:
                return new ChicagoStyleClamPizza();
            case self::TYPE_VEGGIE:
                return new ChicagoStyleVeggiePizza();
            default:
                return null;
        }
    }
}
