<?php
/**
 * User: isaac
 * Date: 09/02/2018
 * Time: 10:57 AM
 */

use Headfirst\Commands\GarageDoorCloseCommand;
use Headfirst\Commands\GarageDoorOpenCommand;
use Headfirst\Commands\LightOffCommand;
use Headfirst\Commands\LightOnCommand;
use Headfirst\Commands\StereoOffCommand;
use Headfirst\Commands\StereoOnWithCDCommand;
use Headfirst\Invokers\RemoteControl;
use Headfirst\Receivers\GarageDoor;
use Headfirst\Receivers\Light;
use Headfirst\Receivers\Stereo;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$remoteControl = new RemoteControl();

$livingRoomLight = new Light('Living Room');
$kitchenLight    = new Light('Kitchen');
$garageDoor      = new GarageDoor();
$stereo          = new Stereo();

$livingRoomLightOn  = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn     = new LightOnCommand($kitchenLight);
$kitchenLightOff    = new LightOffCommand($kitchenLight);

$garageDoorUp   = new GarageDoorOpenCommand($garageDoor);
$garageDoorDown = new GarageDoorCloseCommand($garageDoor);

$stereoOnWithCD = new StereoOnWithCDCommand($stereo);
$stereoOff      = new StereoOffCommand($stereo);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $garageDoorUp, $garageDoorDown);
$remoteControl->setCommand(3, $stereoOnWithCD, $stereoOff);

echo $remoteControl, PHP_EOL;

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->offButtonWasPushed(3);
