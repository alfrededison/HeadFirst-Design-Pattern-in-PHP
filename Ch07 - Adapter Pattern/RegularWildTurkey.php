<?php
/**
 * User: isaac
 * Date: 13/02/2018
 * Time: 3:48 PM
 */

namespace Headfirst;


class RegularWildTurkey implements TurkeyInterface
{

    public function gobble()
    {
        echo 'Gobble gobble', PHP_EOL;
    }

    public function fly()
    {
        echo "I'm flying a short distance", PHP_EOL;
    }
}
