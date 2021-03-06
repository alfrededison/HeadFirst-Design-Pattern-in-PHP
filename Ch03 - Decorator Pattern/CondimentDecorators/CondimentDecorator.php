<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:20 PM
 */

namespace Headfirst\CondimentDecorators;

use Headfirst\Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{
    /** @var Beverage $beverage */
    protected $beverage;

    /**
     * CondimentDecorator constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
