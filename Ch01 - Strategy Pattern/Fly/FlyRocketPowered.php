<?php
/**
 * User: isaac
 * Date: 31/01/2018
 * Time: 4:40 PM
 */

require_once 'FlyBehavior.php';

class FlyRocketPowered implements FlyBehavior
{

    public function fly()
    {
        echo "I'm flying with a rocket!\n";
    }
}
