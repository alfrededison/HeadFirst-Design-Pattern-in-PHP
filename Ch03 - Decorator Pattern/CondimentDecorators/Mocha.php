<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:34 PM
 */

require_once __DIR__.'/../CondimentDecorator.php';

class Mocha extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}