<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 3:15 PM
 */

namespace Headfirst\Invokers;


use Headfirst\Commands\Command;

class SimpleRemoteControl
{
    /** @var Command $slot */
    protected $slot;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
