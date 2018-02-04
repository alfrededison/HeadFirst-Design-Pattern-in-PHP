<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:20 PM
 */

require_once 'Beverage.php';

abstract class CondimentDecorator extends Beverage
{
    /** @var \Beverage $beverage */
    protected $beverage;

    /**
     * CondimentDecorator constructor.
     * @param \Beverage $beverage
     */
    public function __construct(\Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}