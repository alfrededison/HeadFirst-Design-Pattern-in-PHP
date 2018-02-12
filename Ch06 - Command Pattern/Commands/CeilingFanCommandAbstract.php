<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 11:32 AM
 */

namespace Headfirst\Commands;


use Headfirst\Receivers\CeilingFan;

abstract class CeilingFanCommandAbstract implements Command
{
    /** @var CeilingFan $ceilingFan */
    protected $ceilingFan;

    /** @var int $prevSpeed */
    protected $prevSpeed;

    abstract protected function setSpeed();

    /**
     * CeilingFanHighCommand constructor.
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->setSpeed();
    }

    public function undo()
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->ceilingFan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->ceilingFan->medium();
                break;
            case CeilingFan::LOW:
                $this->ceilingFan->low();
                break;
            case CeilingFan::OFF:
                $this->ceilingFan->off();
                break;
        }
    }
}
