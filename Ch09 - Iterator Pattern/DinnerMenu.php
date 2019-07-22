<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 11:51 AM
 */

namespace Headfirst;


class DinnerMenu implements Menu
{
    const MAX_ITEMS = 6;

    /** @var int $numberOfItems */
    protected $numberOfItems = 0;

    /** @var \SplFixedArray $menuItems */
    protected $menuItems;

    public function __construct()
    {
        $this->menuItems = new \SplFixedArray(self::MAX_ITEMS);

        $this->addItem("Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat",
            true,
            2.99);
        $this->addItem("BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99);
        $this->addItem("Soup of the day",
            "Soup of the day, with a side of potato salad",
            false,
            3.29);
        $this->addItem("Hotdog",
            "A hot dog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05);

    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Can't add item to menu", PHP_EOL;
        } else {
            $this->menuItems[$this->numberOfItems++] = $menuItem;
        }
    }

    public function createIterator(): Iterator
    {
        return new DinnerMenuIterator($this->menuItems);
    }
}
