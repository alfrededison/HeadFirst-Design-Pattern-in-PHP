<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 3:18 PM
 */

use Headfirst\Commands\LightOnCommand;
use Headfirst\Invokers\SimpleRemoteControl;
use Headfirst\Receivers\Light;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lightOn = new LightOnCommand($light);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();