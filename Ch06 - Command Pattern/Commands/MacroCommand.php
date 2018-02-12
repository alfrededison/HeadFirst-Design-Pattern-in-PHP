<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 4:03 PM
 */

namespace Headfirst\Commands;


class MacroCommand implements Command
{
    /** @var array $commands */
    protected $commands = [];

    /**
     * MacroCommand constructor.
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            /** @var Command $command */
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            /** @var Command $command */
            $command->undo();
        }
    }
}
