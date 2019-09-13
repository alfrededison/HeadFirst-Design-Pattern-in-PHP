<?php

namespace Headfirst;

interface QuackObserver
{
    function update(QuackObservable $duck);
}