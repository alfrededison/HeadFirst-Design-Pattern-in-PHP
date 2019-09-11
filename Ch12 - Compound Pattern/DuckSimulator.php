<?php

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

$mallardDuck = new QuackCounter(new NewMallardDuck());
$redheadDuck = new QuackCounter(new RedheadDuck());
$duckCall = new QuackCounter(new DuckCall());
$rubberDuck = new QuackCounter(new RubberDuck());
$gooseDuck = new GooseAdapter(new Goose());

echo "\nDuck Simulator: With Decorator\n";

simulate($mallardDuck);
simulate($redheadDuck);
simulate($duckCall);
simulate($rubberDuck);
simulate($gooseDuck);

echo "\nThe ducks quacked " . QuackCounter::getQuacks() . " times\n";