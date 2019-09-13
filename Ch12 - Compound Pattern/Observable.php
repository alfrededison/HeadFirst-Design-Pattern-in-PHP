<?php

namespace Headfirst;

class Observable implements QuackObservable
{
    /** @var array */
    protected $observers = [];

    /** @var QuackObservable */
    protected $duck;

    /**
     * Observable constructor.
     * @param QuackObservable $duck
     */
    public function __construct(QuackObservable $duck)
    {
        $this->duck = $duck;
    }

    function registerObserver(QuackObserver $observer)
    {
        $this->observers[] = $observer;
    }

    function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            /** @var QuackObserver $observer*/
            $observer->update($this->duck);
        }
    }

    function __toString()
    {
        return $this->duck->__toString();
    }
}