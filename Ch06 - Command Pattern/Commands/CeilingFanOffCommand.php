<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 11:32 AM
 */

namespace Headfirst\Commands;


class CeilingFanOffCommand extends CeilingFanCommandAbstract
{
    public function setSpeed()
    {
        $this->ceilingFan->off();
    }
}
