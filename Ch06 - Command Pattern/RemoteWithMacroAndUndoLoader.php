<?php
/**
 * User: isaac
 * Date: 09/02/2018
 * Time: 10:57 AM
 */

use Headfirst\Commands\CeilingFanHighCommand;
use Headfirst\Commands\CeilingFanOffCommand;
use Headfirst\Commands\LightOffCommand;
use Headfirst\Commands\LightOnCommand;
use Headfirst\Commands\MacroCommand;
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

$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff  = new CeilingFanOffCommand($ceilingFan);

$partyOn  = [$livingRoomLightOn, $ceilingFanHigh];
$partyOff = [$livingRoomLightOff, $ceilingFanOff];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

echo $remoteControl, PHP_EOL;

echo '--- Pushing Macro On ---', PHP_EOL;
$remoteControl->onButtonWasPushed(0);
echo '--- Pushing Macro Off ---', PHP_EOL;
$remoteControl->offButtonWasPushed(0);
echo $remoteControl, PHP_EOL;
echo '--- Pushing Macro Undo ---', PHP_EOL;
$remoteControl->undoButtonWasPushed();
