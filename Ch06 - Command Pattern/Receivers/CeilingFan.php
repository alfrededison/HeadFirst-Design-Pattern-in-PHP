<?php
/**
 * User: isaac
 * Date: 12/02/2018
 * Time: 11:27 AM
 */

namespace Headfirst\Receivers;


class CeilingFan
{
    const HIGH   = 3;
    const MEDIUM = 2;
    const LOW    = 1;
    const OFF    = 0;

    /** @var string $location */
    protected $location = '';

    /** @var int $speed */
    protected $speed;

    /**
     * CeilingFan constructor.
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed    = self::OFF;
    }

    public function high()
    {
        $this->speed = self::HIGH;
        echo $this->location, ' ceiling fan is on HIGH', PHP_EOL;
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        echo $this->location, ' ceiling fan is on MEDIUM', PHP_EOL;
    }

    public function low()
    {
        $this->speed = self::LOW;
        echo $this->location, ' ceiling fan is on LOW', PHP_EOL;
    }

    public function off()
    {
        $this->speed = self::OFF;
        echo $this->location, ' ceiling fan is OFF', PHP_EOL;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}
