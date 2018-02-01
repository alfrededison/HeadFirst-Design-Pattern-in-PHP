<?php
/**
 * User: isaac
 * Date: 31/01/2018
 * Time: 4:40 PM
 */

require_once 'QuackBehavior.php';

class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "Squeak\n";
    }
}
