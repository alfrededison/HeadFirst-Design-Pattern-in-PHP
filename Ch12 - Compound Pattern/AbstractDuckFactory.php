<?php

namespace Headfirst;

abstract class AbstractDuckFactory
{
    public abstract function createNewMallardDuck(): Quackable;

    public abstract function createRedheadDuck(): Quackable;

    public abstract function createDuckCall(): Quackable;

    public abstract function createRubberDuck(): Quackable;
}