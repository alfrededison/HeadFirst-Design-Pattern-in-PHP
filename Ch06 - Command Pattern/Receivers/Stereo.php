<?php
/**
 * User: isaac
 * Date: 09/02/2018
 * Time: 10:49 AM
 */

namespace Headfirst\Receivers;


class Stereo
{
    public function on()
    {
        echo 'Stereo is On', PHP_EOL;
    }

    public function off()
    {
        echo 'Stereo is Off', PHP_EOL;
    }

    public function setCD()
    {
        echo 'Stereo is set for CD input', PHP_EOL;
    }

    public function setDVD()
    {
        echo 'Stereo is set for DVD input', PHP_EOL;
    }

    public function setRadio()
    {
        echo 'Stereo is set for Radio channel', PHP_EOL;
    }

    public function setVolume(int $vol)
    {
        echo 'Stereo volume set to ', $vol, PHP_EOL;
    }
}
