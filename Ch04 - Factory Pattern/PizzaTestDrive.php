<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:57 PM
 */

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

use Headfirst\Stores\ChicagoStylePizzaStore;
use Headfirst\Stores\NYStylePizzaStore;

$nyStore = new NYStylePizzaStore();
$chicagoStore = new ChicagoStylePizzaStore();

$pizza = $nyStore->orderPizza(NYStylePizzaStore::TYPE_CHEESE);
echo 'Ethan ordered a ', $pizza->getName(), PHP_EOL, PHP_EOL;

$pizza = $chicagoStore->orderPizza(ChicagoStylePizzaStore::TYPE_CHEESE);
echo 'Joel ordered a ', $pizza->getName(), PHP_EOL, PHP_EOL;
