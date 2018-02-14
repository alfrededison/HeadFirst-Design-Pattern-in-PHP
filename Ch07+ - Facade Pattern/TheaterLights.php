<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 3:51 PM
 */

namespace Headfirst;


class TheaterLights
{
    public function on()
    {
        echo 'Theater ceiling lights on', PHP_EOL;
    }

    public function off()
    {
        echo 'Theater ceiling lights off', PHP_EOL;
    }

    public function dim()
    {
        echo 'Theater ceiling lights dimming to 10%', PHP_EOL;
    }
}
