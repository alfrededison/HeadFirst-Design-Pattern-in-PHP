<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:34 PM
 */

namespace Headfirst;


class PancakeHouseMenuIterator implements Iterator
{
    /** @var array $items */
    protected $items;

    /** @var int $position */
    protected $position = 0;

    /**
     * DinnerMenuIterator constructor.
     * @param array $menuItems
     */
    public function __construct(array $menuItems)
    {
        $this->items = $menuItems;
    }

    public function hasNext(): bool
    {
        if ($this->position >= count($this->items)) {
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
