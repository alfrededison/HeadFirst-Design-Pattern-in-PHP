<?php
/**
 * User: isaac
 * Date: 31/01/2018
 * Time: 4:40 PM
 */

namespace Headfirst\Quack;

class NormalQuack implements QuackBehavior
{

    public function quack()
    {
        echo "Quack\n";
    }
}
