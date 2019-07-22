<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:52 PM
 */

use Headfirst\Menu;
use Headfirst\MenuItem;
use Headfirst\Waitress;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$pancakeHouseMenu = new Menu("Pancake House menu", "Breakfast");
$dinnerMenu       = new Menu("Dinner Menu", "Lunch");
$cafeMenu         = new Menu("Cafe Menu", "Dinner");
$dessertMenu      = new Menu("Dessert Menu", "Dessert of course");

$allMenus = new Menu("ALL MENUS", "All menus combined");

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinnerMenu);
$allMenus->add($cafeMenu);

$pancakeHouseMenu->add(
    new MenuItem("K&B's Pancake Breakfast",
                 "Pancakes with scrambled eggs, and toast",
                 true,
                 2.99));
$dinnerMenu->add(
    new MenuItem("Vegetarian BLT",
                 "(Fakin') Bacon with lettuce & tomato on whole wheat",
                 true, 2.99));
$dinnerMenu->add($dessertMenu);
$cafeMenu->add(
    new MenuItem("Soup of the day",
                 "Soup of the day, with a side of potato salad",
                 false,
                 3.29));
$dessertMenu->add(
    new MenuItem("BLT",
                 "Bacon with lettuce & tomato on whole wheat",
                 false,
                 2.99));

$waitress = new Waitress($allMenus);
$waitress->printMenu();
