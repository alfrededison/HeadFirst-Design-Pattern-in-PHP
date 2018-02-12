<?php
/**
 * User: isaac
 * Date: 09/02/2018
 * Time: 10:57 AM
 */

use Headfirst\Commands\CeilingFanHighCommand;
use Headfirst\Commands\CeilingFanMediumCommand;
use Headfirst\Commands\CeilingFanOffCommand;
use Headfirst\Commands\LightOffCommand;
use Headfirst\Commands\LightOnCommand;
use Headfirst\Invokers\RemoteControlWithUndo;
use Headfirst\Receivers\CeilingFan;
use Headfirst\Receivers\Light;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$remoteControl = new RemoteControlWithUndo();

$livingRoomLight = new Light('Living Room');
$ceilingFan      = new CeilingFan('Living Room');

$livingRoomLightOn  = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$ceilingFanHigh   = new CeilingFanHighCommand($ceilingFan);
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanOff    = new CeilingFanOffCommand($ceilingFan);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $ceilingFanMedium, $ceilingFanOff);
$remoteControl->setCommand(2, $ceilingFanHigh, $ceilingFanOff);

echo $remoteControl, PHP_EOL;

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
echo $remoteControl, PHP_EOL;
$remoteControl->undoButtonWasPushed();

$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(0);
echo $remoteControl, PHP_EOL;
$remoteControl->undoButtonWasPushed();

$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
echo $remoteControl, PHP_EOL;
$remoteControl->undoButtonWasPushed();

$remoteControl->onButtonWasPushed(2);
echo $remoteControl, PHP_EOL;
$remoteControl->undoButtonWasPushed();
