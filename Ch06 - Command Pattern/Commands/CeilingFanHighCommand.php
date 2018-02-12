<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 11:32 AM
 */

namespace Headfirst\Commands;


class CeilingFanHighCommand extends CeilingFanCommandAbstract
{
    public function setSpeed()
    {
        $this->ceilingFan->high();
    }
}
