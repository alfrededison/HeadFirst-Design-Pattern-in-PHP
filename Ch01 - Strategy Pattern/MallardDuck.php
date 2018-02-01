<?php
/**
 * User: isaac
 * Date: 01/02/2018
 * Time: 10:54 AM
 */

require_once 'Duck.php';
require_once 'Fly/FlyWithWings.php';
require_once 'Quack/NormalQuack.php';

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
