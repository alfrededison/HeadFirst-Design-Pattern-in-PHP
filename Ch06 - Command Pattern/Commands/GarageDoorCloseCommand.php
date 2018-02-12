<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 3:31 PM
 */

namespace Headfirst\Commands;


use Headfirst\Receivers\GarageDoor;

class GarageDoorCloseCommand implements Command
{
    /** @var GarageDoor $garageDoor */
    protected $garageDoor;

    /**
     * GarageDoorOpenCommand constructor.
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->down();
    }

    public function undo()
    {
        $this->garageDoor->up();
    }
}
