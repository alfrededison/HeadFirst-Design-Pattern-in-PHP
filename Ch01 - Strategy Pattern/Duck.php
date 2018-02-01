<?php

/**
 * User: isaac
 * Date: 31/01/2018
 * Time: 4:30 PM
 */

require_once 'Quack/QuackBehavior.php';
require_once 'Fly/FlyBehavior.php';

abstract class Duck
{
    /** @var FlyBehavior */
    protected $flyBehavior;

    /** @var QuackBehavior */
    protected $quackBehavior;

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * @param \FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param \QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\n";
    }
}
