<?php
/**
 * User: isaac
 * Date: 16/02/2018
 * Time: 4:49 PM
 */

namespace Headfirst;


class Tea extends CaffeineBeverage
{

    protected function brew()
    {
        echo 'Steeping the tea', PHP_EOL;
    }

    protected function addCondiments()
    {
        echo 'Adding lemon', PHP_EOL;
    }
}
