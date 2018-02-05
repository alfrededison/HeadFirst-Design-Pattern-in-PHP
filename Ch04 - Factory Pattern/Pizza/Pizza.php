<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 9:10 AM
 */

namespace Headfirst\Pizza;

abstract class Pizza
{
    /** @var string $name */
    protected $name;

    /** @var string $dough */
    protected $dough;

    /** @var string $sauce */
    protected $sauce;

    /** @var array $toppings */
    protected $toppings = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function prepare()
    {
        echo 'Preparing ', $this->name, PHP_EOL;
        echo 'Tossing dough...', PHP_EOL;
        echo 'Adding source...', PHP_EOL;
        echo 'Adding toppings:', PHP_EOL;
        array_walk($this->toppings, function ($topping) {
            echo '    ', $topping, PHP_EOL;
        });
    }

    public function bake()
    {
        echo 'Bake for 25 minutes at 350', PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting the pizza into diagonal slices', PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore box', PHP_EOL;
    }

}
