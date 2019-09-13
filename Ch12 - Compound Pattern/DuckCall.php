<?php

namespace Headfirst;

class DuckCall extends AbstractQuackable
{

    public function quack()
    {
        echo "Kwak\n";
        $this->notifyObservers();
    }

    function __toString()
    {
        return "Duck Call";
    }
}