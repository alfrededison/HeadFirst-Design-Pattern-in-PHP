<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 10:31 AM
 */

namespace Headfirst;


class ChocolateBoiler
{
    /** @var bool $empty */
    private $empty;

    /** @var bool $boiled */
    private $boiled;

    /** @var ChocolateBoiler $uniqueInstance */
    private static $uniqueInstance;

    private function __construct()
    {
        $this->empty  = true;
        $this->boiled = false;
    }

    public static function getInstance(): ChocolateBoiler
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new ChocolateBoiler();
        }

        return self::$uniqueInstance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty  = false;
            $this->boiled = false;
            echo 'Fill the boiler with a milk/chocolate mixture', PHP_EOL;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            echo 'Bring the contents to a boil', PHP_EOL;
            $this->boiled = true;
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            echo 'Drain the boiled milk and chocolate', PHP_EOL;
            $this->empty = true;
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}
