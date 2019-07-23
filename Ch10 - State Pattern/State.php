<?php

namespace Headfirst;

interface State
{
    function insertQuarter();
    function ejectQuarter();
    function turnCrank();
    function dispense();
}