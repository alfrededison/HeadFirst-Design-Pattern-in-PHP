<?php

require_once 'MallardDuck.php';
require_once 'ModelDuck.php';
require_once 'Fly/FlyRocketPowered.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
