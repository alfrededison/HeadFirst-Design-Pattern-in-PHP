<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:34 PM
 */

namespace Headfirst\CondimentDecorators;

class Mocha extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}