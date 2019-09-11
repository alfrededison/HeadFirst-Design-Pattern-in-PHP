<?php

namespace Headfirst;

class CountingDuckFactory extends AbstractDuckFactory
{

    public function createNewMallardDuck(): Quackable
    {
        return new QuackCounter(new NewMallardDuck());
    }

    public function createRedheadDuck(): Quackable
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall(): Quackable
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }
}