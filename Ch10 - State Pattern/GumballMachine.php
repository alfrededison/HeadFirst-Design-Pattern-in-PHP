<?php

namespace Headfirst;

class GumballMachine
{
    protected $noQuarterState;
    protected $hasQuarterState;
    protected $soldState;
    protected $soldOutState;
    protected $winnerState;

    protected $state;
    protected $count = 0;

    /**
     * GumballMachine constructor.
     * @param int $count
     */
    public function __construct(int $count)
    {
        $this->noQuarterState  = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState       = new SoldState($this);
        $this->soldOutState    = new SoldOutState($this);
        $this->winnerState     = new WinnerState($this);
        $this->count           = $count;
        if ($count > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out of the slot...\n";
        if ($this->count != 0) {
            $this->count--;
        }
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState(): NoQuarterState
    {
        return $this->noQuarterState;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    /**
     * @return SoldState
     */
    public function getSoldState()
    {
        return $this->soldState;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    /**
     * @return WinnerState
     */
    public function getWinnerState(): WinnerState
    {
        return $this->winnerState;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return <<< _GUMBALL
=====================
Mighty Gumball, Inc.
PHP-enabled Standing Gumball Model #2019
Inventory: {$this->count} gumballs
{$this->state}


_GUMBALL;
    }
}