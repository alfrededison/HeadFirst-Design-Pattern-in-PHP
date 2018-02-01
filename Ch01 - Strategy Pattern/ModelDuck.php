<?php
/**
 * User: isaac
 * Date: 01/02/2018
 * Time: 10:54 AM
 */

require_once 'Duck.php';
require_once 'Fly/FlyNoWay.php';
require_once 'Quack/NormalQuack.php';

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
