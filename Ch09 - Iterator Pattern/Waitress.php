<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:43 PM
 */

namespace Headfirst;


class Waitress
{
    /** @var PancakeHouseMenu $pancakeHouseMenu */
    protected $pancakeHouseMenu;

    /** @var DinnerMenu $dinnerMenu */
    protected $dinnerMenu;

    /**
     * Waitress constructor.
     * @param PancakeHouseMenu $pancakeHouseMenu
     * @param DinnerMenu       $dinnerMenu
     */
    public function __construct(
        PancakeHouseMenu $pancakeHouseMenu,
        DinnerMenu $dinnerMenu
    ) {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinnerMenu       = $dinnerMenu;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinnerIterator  = $this->dinnerMenu->createIterator();

        echo 'Menu', PHP_EOL, '----', PHP_EOL, 'BREAKFAST', PHP_EOL;
        $this->printMenuIterator($pancakeIterator);
        echo PHP_EOL, 'LUNCH', PHP_EOL;
        $this->printMenuIterator($dinnerIterator);
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
