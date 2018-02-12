<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 3:38 PM
 */

namespace Headfirst\Invokers;


use Headfirst\Commands\Command;
use Headfirst\Commands\NoCommand;

class RemoteControlWithUndo
{
    /** @var array $onCommands */
    protected $onCommands = [];

    /** @var array $offCommands */
    protected $offCommands = [];

    /** @var Command $undoCommand */
    protected $undoCommand;

    /**
     * RemoteControl constructor.
     */
    public function __construct()
    {
        $noCommand           = new NoCommand();
        $this->onCommands  = array_fill(0, 7, $noCommand);
        $this->offCommands = array_fill(0, 7, $noCommand);
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        if (isset($this->onCommands[$slot])) {
            $this->onCommands[$slot]->execute();
            $this->undoCommand = $this->onCommands[$slot];
        }
    }

    public function offButtonWasPushed(int $slot)
    {
        if (isset($this->offCommands[$slot])) {
            $this->offCommands[$slot]->execute();
            $this->undoCommand = $this->offCommands[$slot];
        }
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }

    public function __toString()
    {
        $content = PHP_EOL . '----- Remote Control -----' . PHP_EOL;
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $content .= "[slot $i]" . get_class($this->onCommands[$i]) . "\t\t" . get_class($this->offCommands[$i]) . PHP_EOL;
        }
        $content .= "[undo]" . get_class($this->undoCommand) . PHP_EOL;

        return $content;
    }

}
