<?php

namespace Headfirst;

class SoldOutState implements State
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
        echo "You can't insert a quarter, the machine is sold out\n";
    }

    function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet\n";
    }

    function turnCrank()
    {
        echo "You turned, but there are no gumballs\n";
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
        return "Machine is sold out";
    }
}