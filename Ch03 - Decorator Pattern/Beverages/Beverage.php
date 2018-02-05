<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:06 PM
 */

namespace Headfirst\Beverages;

abstract class Beverage
{
    protected $description = 'Unknown beverage';

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    abstract public function cost(): float;
}
