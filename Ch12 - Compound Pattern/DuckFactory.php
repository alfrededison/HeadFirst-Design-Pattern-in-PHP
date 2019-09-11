<?php

namespace Headfirst;

class DuckFactory extends AbstractDuckFactory
{

    public function createNewMallardDuck(): Quackable
    {
        return new NewMallardDuck();
    }

    public function createRedheadDuck(): Quackable
    {
        return new RedheadDuck();
    }

    public function createDuckCall(): Quackable
    {
        return new DuckCall();
    }

    public function createRubberDuck(): Quackable
    {
        return new RubberDuck();
    }
}