<?php
/**
 * User: isaac
 * Date: 16/02/2018
 * Time: 4:49 PM
 */

namespace Headfirst;


class Coffee extends CaffeineBeverage
{

    protected function brew()
    {
        echo 'Dripping coffee though filter', PHP_EOL;
    }

    protected function addCondiments()
    {
        echo 'Adding sugar and milk', PHP_EOL;
    }
}
