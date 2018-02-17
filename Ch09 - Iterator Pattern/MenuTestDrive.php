<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 1:52 PM
 */

use Headfirst\DinnerMenu;
use Headfirst\PancakeHouseMenu;
use Headfirst\Waitress;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinnerMenu       = new DinnerMenu();
$waitress         = new Waitress($pancakeHouseMenu, $dinnerMenu);
$waitress->printMenu();
