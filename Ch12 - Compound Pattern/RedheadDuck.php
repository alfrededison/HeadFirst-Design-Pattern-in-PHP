<?php

namespace Headfirst;

class RedheadDuck extends AbstractQuackable
{

    public function quack()
    {
        echo "Quack\n";
        $this->notifyObservers();
    }

    function __toString()
    {
        return "Redhead Duck";
    }
}