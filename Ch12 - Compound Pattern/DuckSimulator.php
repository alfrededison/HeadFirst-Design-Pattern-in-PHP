<?php

use Headfirst\CountingDuckFactory;
use Headfirst\DuckCall;
use Headfirst\Flock;
use Headfirst\Goose;
use Headfirst\GooseAdapter;
use Headfirst\NewMallardDuck;
use Headfirst\Quackable;
use Headfirst\QuackCounter;
use Headfirst\Quackologist;
use Headfirst\RedheadDuck;
use Headfirst\RubberDuck;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

function simulate(Quackable $duck) {
    $duck->quack();
}

$duckFactory = new CountingDuckFactory();

$redheadDuck = $duckFactory->createRedheadDuck();
$duckCall = $duckFactory->createDuckCall();
$rubberDuck = $duckFactory->createRubberDuck();
$gooseDuck = new GooseAdapter(new Goose());

echo "\nDuck Simulator: With Observer\n";

$flockOfDucks = new Flock();

$flockOfDucks->add($redheadDuck);
$flockOfDucks->add($duckCall);
$flockOfDucks->add($rubberDuck);
$flockOfDucks->add($gooseDuck);

$flockOfMallards = new Flock();

$flockOfMallards->add($duckFactory->createNewMallardDuck());
$flockOfMallards->add($duckFactory->createNewMallardDuck());
$flockOfMallards->add($duckFactory->createNewMallardDuck());
$flockOfMallards->add($duckFactory->createNewMallardDuck());

$flockOfDucks->add($flockOfMallards);

$quackologist = new Quackologist();
$flockOfDucks->registerObserver($quackologist);

simulate($flockOfDucks);

echo "\nThe ducks quacked " . QuackCounter::getQuacks() . " times\n";