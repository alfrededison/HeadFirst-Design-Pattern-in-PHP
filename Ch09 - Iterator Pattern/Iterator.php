<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:32 PM
 */

namespace Headfirst;


interface Iterator
{
    public function hasNext(): bool;

    public function next();
}
