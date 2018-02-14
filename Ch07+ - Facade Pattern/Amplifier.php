<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 3:50 PM
 */

namespace Headfirst;


class Amplifier
{
    /** @var Tuner $tuner */
    protected $tuner;

    /** @var DvdPlayer $dvdPlayer */
    protected $dvdPlayer;

    /** @var CdPlayer $cdPlayer */
    protected $cdPlayer;

    public function on()
    {
        echo 'Amplifier on', PHP_EOL;
    }

    public function off()
    {
        echo 'Amplifier off', PHP_EOL;
    }

    public function setCd(CdPlayer $cdPlayer)
    {
        $this->cdPlayer = $cdPlayer;
        echo 'Amplifier setting to CD player', PHP_EOL;
    }

    public function setDvd(DvdPlayer $dvdPlayer)
    {
        $this->dvdPlayer = $dvdPlayer;
        echo 'Amplifier setting to DVD player', PHP_EOL;
    }

    public function setStereoSound()
    {
        echo 'Amplifier stereo sound on (2 speakers)', PHP_EOL;
    }

    public function setSurroundSound()
    {
        echo 'Amplifier surround sound on (5 speakers, 1 sub-woofer)', PHP_EOL;
    }

    public function setTuner(Tuner $tuner)
    {
        $this->tuner = $tuner;
        echo 'Amplifier setting with tuner', PHP_EOL;
    }

    public function setVolume(int $volume)
    {
        echo 'Amplifier setting volume to ', $volume, PHP_EOL;
    }
}
