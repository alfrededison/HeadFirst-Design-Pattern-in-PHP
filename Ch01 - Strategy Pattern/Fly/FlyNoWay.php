<?php
/**
 * User: isaac
 * Date: 31/01/2018
 * Time: 4:40 PM
 */

namespace Headfirst\Fly;

class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo "I can't fly\n";
    }
}
