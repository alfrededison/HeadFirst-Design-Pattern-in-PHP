<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:34 PM
 */

namespace Headfirst;


class DinnerMenuIterator implements Iterator
{
    /** @var \SplFixedArray $items */
    protected $items;

    /** @var int $position */
    protected $position = 0;

    /**
     * DinnerMenuIterator constructor.
     * @param \SplFixedArray $menuItems
     */
    public function __construct(\SplFixedArray $menuItems)
    {
        $this->items = $menuItems;
    }

    public function hasNext(): bool
    {
        if ($this->position >= $this->items->getSize() || $this->items[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        return $this->items[$this->position++];
    }
}
