<?php

namespace Headfirst;

class RubberDuck extends AbstractQuackable
{

    public function quack()
    {
        echo "Squeak\n";
        $this->notifyObservers();
    }

    function __toString()
    {
        return "Rubber Duck";
    }
}