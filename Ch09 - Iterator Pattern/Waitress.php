<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:43 PM
 */

namespace Headfirst;


class Waitress
{
    /** @var MenuComponent */
    protected $allMenus;

    /**
     * Waitress constructor.
     * @param MenuComponent $menus
     */
    public function __construct(MenuComponent $menus)
    {
        $this->allMenus = $menus;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }

    public function printVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();
        echo "\nVEGETARIAN MENU\n-----\n";
        while ($iterator->hasNext()) {
            /** @var MenuComponent $menuComponent */
            $menuComponent = $iterator->next();
            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->print();
                }
            } catch (UnsupportedOperationException $exception) {}
        }
    }
}
