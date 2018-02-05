<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:24 PM
 */

namespace Headfirst\Beverages;

class HouseBlend extends Beverage
{
    protected $description = 'House Blend Coffee';

    /**
     * {@inheritdoc}
     */
    public function cost(): float
    {
        return .89;
    }
}