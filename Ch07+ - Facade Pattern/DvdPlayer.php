<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 3:50 PM
 */

namespace Headfirst;


class DvdPlayer
{
    public function on()
    {
        echo 'DVD player on', PHP_EOL;
    }

    public function off()
    {
        echo 'DVD player off', PHP_EOL;
    }

    public function eject()
    {
        echo 'DVD player eject', PHP_EOL;
    }

    public function play(string $movie)
    {
        echo 'DVD player playing ', $movie, PHP_EOL;
    }

    public function pause()
    {
        echo 'DVD player pausing', PHP_EOL;
    }

    public function stop()
    {
        echo 'DVD player stopped', PHP_EOL;
    }

    public function setSurroundAudio()
    {
        echo 'DVD player surround audio on (5 speakers, 1 sub-woofer)', PHP_EOL;
    }

    public function setTwoChannelAudio()
    {
        echo 'DVD player 2-channel audio on (2 speakers)', PHP_EOL;
    }
}
