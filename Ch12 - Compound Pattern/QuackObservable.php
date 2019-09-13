<?php

namespace Headfirst;

interface QuackObservable
{
    function registerObserver(QuackObserver $observer);

    function notifyObservers();

    function __toString();
}