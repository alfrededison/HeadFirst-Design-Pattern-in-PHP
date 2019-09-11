<?php

use Headfirst\DuckCall;
use Headfirst\NewMallardDuck;
use Headfirst\Quackable;
use Headfirst\RedheadDuck;
use Headfirst\RubberDuck;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

function simulate(Quackable $duck) {
    $duck->quack();
}

$mallardDuck = new NewMallardDuck();
$redheadDuck = new RedheadDuck();
$duckCall = new DuckCall();
$rubberDuck = new RubberDuck();

echo "\nDuck Simulator\n";

simulate($mallardDuck);
simulate($redheadDuck);
simulate($duckCall);
simulate($rubberDuck);