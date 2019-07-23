<?php


namespace Headfirst;


class NullIterator implements Iterator
{

    public function hasNext(): bool
    {
        return false;
    }

    public function next()
    {
        return null;
    }
}