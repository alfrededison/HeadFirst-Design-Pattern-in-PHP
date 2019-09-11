<?php

use Headfirst\DuckCall;
use Headfirst\Goose;
use Headfirst\GooseAdapter;
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
$gooseDuck = new GooseAdapter(new Goose());

echo "\nDuck Simulator: With Goose Adapter\n";

simulate($mallardDuck);
simulate($redheadDuck);
simulate($duckCall);
simulate($rubberDuck);
simulate($gooseDuck);