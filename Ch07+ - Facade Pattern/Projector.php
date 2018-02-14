<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 3:51 PM
 */

namespace Headfirst;


class Projector
{
    public function on()
    {
        echo 'Projector on', PHP_EOL;
    }

    public function off()
    {
        echo 'Projector off', PHP_EOL;
    }

    public function tvMode()
    {
        echo 'Projector in tv mode (4x3 aspect ratio)', PHP_EOL;
    }

    public function wideScreenMode()
    {
        echo 'Projector in wide-screen mode (16x9 aspect ratio)', PHP_EOL;
    }
}
