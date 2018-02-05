<?php

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

use Headfirst\Fly\FlyRocketPowered;
use Headfirst\MallardDuck;
use Headfirst\ModelDuck;

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
