<?php
/**
 * User: isaac
 * Date: 04/02/2018
 * Time: 3:35 PM
 */

require_once 'Beverages/Espresso.php';
require_once 'Beverages/DarkRoast.php';
require_once 'Beverages/HouseBlend.php';
require_once 'CondimentDecorators/Mocha.php';
require_once 'CondimentDecorators/Whip.php';
require_once 'CondimentDecorators/Soy.php';

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
