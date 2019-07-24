<?php

namespace Headfirst;

class WinnerState extends SoldState
{
    function dispense()
    {
        echo "YOU'RE A WINNER! You get 2 gumballs for your quarter\n";
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            parent::dispense();
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return "Machine is about to dispense gumballs";
    }
}