<?php
/**
 * User: isaac
 * Date: 01/02/2018
 * Time: 10:54 AM
 */

namespace Headfirst;

use Headfirst\Fly\FlyNoWay;
use Headfirst\Quack\NormalQuack;

class ModelDuck extends Duck
{

    /**
     * ModelDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new NormalQuack();
    }

    public function display()
    {
        echo "I'm a model duck\n";
    }
}
