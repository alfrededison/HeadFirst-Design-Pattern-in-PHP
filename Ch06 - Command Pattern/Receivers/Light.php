<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 11:51 AM
 */


namespace Headfirst\Receivers;


class Light
{
    protected $name;

    /**
     * Light constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function on()
    {
        echo $this->name, ' light is On', PHP_EOL;
    }

    public function off()
    {
        echo $this->name, ' light is Off', PHP_EOL;
    }
}
