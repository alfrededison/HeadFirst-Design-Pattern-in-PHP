<?php


namespace Headfirst;


abstract class AbstractQuackable implements Quackable
{
    /** @var Observable */
    protected $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    function registerObserver(QuackObserver $observer)
    {
        $this->observable->registerObserver($observer);
    }

    function notifyObservers()
    {
        $this->observable->notifyObservers();
    }
}