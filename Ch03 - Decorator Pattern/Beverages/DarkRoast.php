<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:24 PM
 */

require_once __DIR__.'/../Beverage.php';

class DarkRoast extends Beverage
{
    protected $description = 'Dark Roast';

    /**
     * {@inheritdoc}
     */
    public function cost()
    {
        return .99;
    }
}