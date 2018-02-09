<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 11:49 AM
 */


namespace Headfirst\Commands;


use Headfirst\Receivers\Light;

class LightOffCommand implements Command
{
    /** @var Light $light */
    protected $light;

    /**
     * LightOnCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }
}
