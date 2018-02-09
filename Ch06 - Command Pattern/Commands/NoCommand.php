<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 4:13 PM
 */

namespace Headfirst\Commands;


class NoCommand implements Command
{

    public function execute()
    {
        echo 'Nothing happened', PHP_EOL;
    }
}
