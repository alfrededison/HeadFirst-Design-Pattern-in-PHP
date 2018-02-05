<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:34 PM
 */

namespace Headfirst\CondimentDecorators;

class Soy extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .15 + $this->beverage->cost();
    }
}