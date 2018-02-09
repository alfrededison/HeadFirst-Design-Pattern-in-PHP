<?php
/**
 * User: isaac
 * Date: 09/02/2018
 * Time: 10:54 AM
 */

namespace Headfirst\Commands;


use Headfirst\Receivers\Stereo;

class StereoOnWithCDCommand implements Command
{
    /** @var Stereo $stereo */
    protected $stereo;

    /**
     * StereoOnWithCDCommand constructor.
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}
