<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:24 PM
 */

namespace Headfirst\Beverages;

class DarkRoast extends Beverage
{
    protected $description = 'Dark Roast';

    /**
     * {@inheritdoc}
     */
    public function cost(): float
    {
        return .99;
    }
}