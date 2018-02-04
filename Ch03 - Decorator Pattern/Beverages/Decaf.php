<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:24 PM
 */

require_once __DIR__.'/../Beverage.php';

class Decaf extends Beverage
{
    protected $description = 'Decaf Coffee';

    /**
     * {@inheritdoc}
     */
    public function cost()
    {
        return 1.05;
    }
}