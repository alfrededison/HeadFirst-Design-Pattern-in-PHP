<?php

use Headfirst\CountingDuckFactory;
use Headfirst\DuckCall;
use Headfirst\Goose;
use Headfirst\GooseAdapter;
use Headfirst\NewMallardDuck;
use Headfirst\Quackable;
use Headfirst\QuackCounter;
use Headfirst\RedheadDuck;
use Headfirst\RubberDuck;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

function simulate(Quackable $duck) {
    $duck->quack();
}

$duckFactory = new CountingDuckFactory();

$mallardDuck = $duckFactory->createNewMallardDuck();
$redheadDuck = $duckFactory->createRedheadDuck();
$duckCall = $duckFactory->createDuckCall();
$rubberDuck = $duckFactory->createRubberDuck();
$gooseDuck = new GooseAdapter(new Goose());

echo "\nDuck Simulator: With Abstract Factory\n";

simulate($mallardDuck);
simulate($redheadDuck);
simulate($duckCall);
simulate($rubberDuck);
simulate($gooseDuck);

echo "\nThe ducks quacked " . QuackCounter::getQuacks() . " times\n";