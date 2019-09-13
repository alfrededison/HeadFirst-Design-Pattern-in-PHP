<?php

namespace Headfirst;

class Flock extends AbstractQuackable
{
    /** @var array  */
    protected $quackers = [];

    public function add(Quackable $quackable)
    {
        $this->quackers[] = $quackable;
    }

    public function quack()
    {
        foreach ($this->quackers as $quacker) {
            /** @var Quackable $quacker */
            $quacker->quack();
        }
    }

    function registerObserver(QuackObserver $observer)
    {
        foreach ($this->quackers as $quacker) {
            /** @var Quackable $quacker */
            $quacker->registerObserver($observer);
        }
    }

    function __toString()
    {
        return "Flock of ducks";
    }
}