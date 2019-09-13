<?php

namespace Headfirst;

class NewMallardDuck extends AbstractQuackable
{

    public function quack()
    {
        echo "Quack\n";
        $this->notifyObservers();
    }

    function __toString()
    {
        return "Mallard Duck";
    }
}