<?php


namespace Headfirst;


abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function getChild(int $i): MenuComponent
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function getName(): string
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function getDescription(): string
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function getPrice(): float
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function isVegetarian(): bool
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public function print()
    {
        throw new UnsupportedOperationException("Unsupported Operation");
    }

    public abstract function createIterator(): Iterator;
}
