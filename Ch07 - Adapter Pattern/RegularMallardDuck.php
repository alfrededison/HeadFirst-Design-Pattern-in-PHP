<?php
/**
 * User: isaac
 * Date: 13/02/2018
 * Time: 3:45 PM
 */

namespace Headfirst;


class RegularMallardDuck implements DuckInterface
{

    public function quack()
    {
        echo 'Quack', PHP_EOL;
    }

    public function fly()
    {
        echo "I'm flying", PHP_EOL;
    }
}
