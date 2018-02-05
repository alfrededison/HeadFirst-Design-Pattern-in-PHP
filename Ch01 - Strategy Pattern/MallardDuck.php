<?php
/**
 * User: isaac
 * Date: 01/02/2018
 * Time: 10:54 AM
 */

namespace Headfirst;

use Headfirst\Fly\FlyWithWings;
use Headfirst\Quack\NormalQuack;

class MallardDuck extends Duck
{

    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new NormalQuack();
    }

    public function display()
    {
        echo "I'm a real Mallard duck\n";
    }
}
