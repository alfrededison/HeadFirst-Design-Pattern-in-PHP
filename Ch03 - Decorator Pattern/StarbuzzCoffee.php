<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:35 PM
 */

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

use Headfirst\Beverages\DarkRoast;
use Headfirst\Beverages\Espresso;
use Headfirst\Beverages\HouseBlend;
use Headfirst\CondimentDecorators\Mocha;
use Headfirst\CondimentDecorators\Soy;
use Headfirst\CondimentDecorators\Whip;

$beverage1 = new Espresso();
echo $beverage1->getDescription() . ' $' . $beverage1->cost() . "\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' $' . $beverage2->cost() . "\n";

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' $' . $beverage3->cost() . "\n";
