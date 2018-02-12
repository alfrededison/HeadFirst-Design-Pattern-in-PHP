<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 11:32 AM
 */

namespace Headfirst\Commands;


class CeilingFanLowCommand extends CeilingFanCommandAbstract
{
    public function setSpeed()
    {
        $this->ceilingFan->low();
    }
}
