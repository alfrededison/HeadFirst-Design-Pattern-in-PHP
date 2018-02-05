<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:24 PM
 */

namespace Headfirst\Beverages;

class Espresso extends Beverage
{
    protected $description = 'Espresso';

    /**
     * {@inheritdoc}
     */
    public function cost(): float
    {
        return 1.99;
    }
}