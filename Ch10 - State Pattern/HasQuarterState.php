<?php

namespace Headfirst;

class HasQuarterState implements State
{
    /** @var GumballMachine */
    protected $gumballMachine;

    /**
     * NoQuarterState constructor.
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    function insertQuarter()
    {
        echo "You can't insert another quarter\n";
    }

    function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    function turnCrank()
    {
        echo "You turned...\n";
        if (rand(1, 10) == 1 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    function dispense()
    {
        echo "No gumball dispensed\n";
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return "Machine has quarter";
    }
}