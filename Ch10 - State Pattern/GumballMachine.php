<?php

namespace Headfirst;

class GumballMachine
{
    protected const SOLD_OUT = 0;
    protected const NO_QUARTER = 1;
    protected const HAS_QUARTER = 2;
    protected const SOLD = 3;

    protected $state = self::SOLD_OUT;
    protected $count = 0;

    /**
     * GumballMachine constructor.
     * @param int $count
     */
    public function __construct(int $count)
    {
        $this->count = $count;
        if ($count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "You can't insert another quarter\n";
        } else if ($this->state == self::NO_QUARTER) {
            $this->state = self::HAS_QUARTER;
            echo "You inserted a quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't insert a quarter, the machine is sold out\n";
        } else if ($this->state == self::SOLD) {
            echo "Please wait, we're already giving you a gumball\n";
        }
    }

    public function ejectQuarter()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "Quarter returned\n";
            $this->state = self::NO_QUARTER;
        } else if ($this->state == self::NO_QUARTER) {
            echo "You haven't inserted a quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't eject, you haven't inserted a quarter yet\n";
        } else if ($this->state == self::SOLD) {
            echo "Sorry, you already turned the crank\n";
        }
    }

    public function turnCrank()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "You turned...\n";
            $this->state = self::SOLD;
            $this->dispense();
        } else if ($this->state == self::NO_QUARTER) {
            echo "You turned, but there's no quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You turned, but there are no gumballs\n";
        } else if ($this->state == self::SOLD) {
            echo "Turning twice doesn't get you another gumball!\n";
        }
    }

    public function dispense()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "No gumball dispensed\n";
        } else if ($this->state == self::NO_QUARTER) {
            echo "You need to pay first\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "No gumball dispensed\n";
        } else if ($this->state == self::SOLD) {
            echo "A gumball comes rolling out of the slot\n";
            $this->count--;
            if ($this->count == 0) {
                echo "Oops, out of gumballs\n";
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        if ($this->state == self::HAS_QUARTER) {
            $state = "Machine has quarter";
        } else if ($this->state == self::NO_QUARTER) {
            $state = "Machine is waiting for quarter";
        } else if ($this->state == self::SOLD_OUT) {
            $state = "Machine is sold out";
        } else if ($this->state == self::SOLD) {
            $state = "Machine is about to dispense a gumball";
        } else {
            $state = "";
        }
        return <<< _GUMBALL
=====================
Mighty Gumball, Inc.
PHP-enabled Standing Gumball Model #2019
Inventory: {$this->count} gumballs
{$state}


_GUMBALL;
    }
}