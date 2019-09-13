<?php

namespace Headfirst;

class Quackologist implements QuackObserver
{

    function update(QuackObservable $duck)
    {
        echo "Quackologist: $duck just quacked.\n";
    }
}