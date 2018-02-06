<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 9:03 AM
 */

namespace Headfirst\Stores;

use Headfirst\Pizza\ModernPizza;

abstract class ModernPizzaStore
{
    const TYPE_CHEESE    = 'cheese';
    const TYPE_PEPPERONI = 'pepperoni';
    const TYPE_CLAM      = 'clam';
    const TYPE_VEGGIE    = 'veggie';

    public function orderPizza(string $type): ModernPizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza(string $type): ModernPizza;
}
