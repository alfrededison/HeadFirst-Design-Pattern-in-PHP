<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:34 PM
 */

require_once __DIR__.'/../CondimentDecorator.php';

class Whip extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return .10 + $this->beverage->cost();
    }
}