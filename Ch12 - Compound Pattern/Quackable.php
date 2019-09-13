<?php
/**
 * User: isaac
 * Date: 11/09/2019
 * Time: 4:34 PM
 */

namespace Headfirst;

interface Quackable extends QuackObservable
{
    public function quack();
}
