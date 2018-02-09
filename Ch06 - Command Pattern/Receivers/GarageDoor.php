<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 3:25 PM
 */

namespace Headfirst\Receivers;


class GarageDoor
{
    public function up()
    {
        echo 'Garage door is Open', PHP_EOL;
    }

    public function down()
    {
        echo 'Garage door is Closed', PHP_EOL;
    }

    public function stop()
    {
        echo 'Garage door has been Stopped', PHP_EOL;
    }
}
