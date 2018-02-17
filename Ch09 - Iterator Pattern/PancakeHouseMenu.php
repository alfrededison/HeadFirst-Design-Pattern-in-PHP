<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 11:51 AM
 */

namespace Headfirst;


class PancakeHouseMenu
{
    /** @var array $menuItems */
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem("K&B's Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast",
            true,
            2.99);
        $this->addItem("Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99);
        $this->addItem("Blueberry Pancake",
            "Pancakes made with fresh blueberries",
            true,
            3.49);
        $this->addItem("Waffles",
            "Waffles, with your choice of blueberries or strawberries",
            true,
            3.59);

    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        array_push($this->menuItems, $menuItem);
    }

    public function createIterator(): Iterator
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}
