<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:43 PM
 */

namespace Headfirst;


class Waitress
{
    /** @var array */
    protected $menus;

    /**
     * Waitress constructor.
     * @param array $menus
     */
    public function __construct(array $menus)
    {
        $this->menus = $menus;
    }

    public function printMenu()
    {
        $menuIterator = new StandardIterator($this->menus);

        while ($menuIterator->hasNext()) {
            /** @var Menu $menu */
            $menu = $menuIterator->next();
            $this->printMenuIterator($menu->createIterator());
        }
    }

    private function printMenuIterator(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            /** @var MenuItem $menuItem */
            $menuItem = $iterator->next();
            echo $menuItem->getName(), ', ', $menuItem->getPrice(), ' -- ', $menuItem->getDescription(), PHP_EOL;
        }
    }
}
