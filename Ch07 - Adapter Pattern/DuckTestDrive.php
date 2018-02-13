<?php
/**
 * User: isaac
 * Date: 13/02/2018
 * Time: 3:53 PM
 */

use Headfirst\DuckInterface;
use Headfirst\RegularMallardDuck;
use Headfirst\RegularWildTurkey;
use Headfirst\TurkeyAdapter;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

function testDuck(DuckInterface $duck)
{
    $duck->quack();
    $duck->fly();
}

$duck   = new RegularMallardDuck();
$turkey = new RegularWildTurkey();

$turkeyAdapter = new TurkeyAdapter($turkey);

echo 'The turkey says...', PHP_EOL;
$turkey->gobble();
$turkey->fly();

echo PHP_EOL, 'The duck says...', PHP_EOL;
testDuck($duck);

echo PHP_EOL, 'The turkey adapter says...', PHP_EOL;
testDuck($turkeyAdapter);
