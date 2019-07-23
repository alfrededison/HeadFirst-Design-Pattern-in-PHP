<?php

namespace Headfirst;

class NoQuarterState implements State
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
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    function ejectQuarter()
    {
        echo "You haven't inserted a quarter\n";
    }

    function turnCrank()
    {
        echo "You turned, but there's no quarter\n";
    }

    function dispense()
    {
        echo "You need to pay first\n";
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return "Machine is waiting for quarter";
    }
}