<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 9:10 AM
 */

namespace Headfirst\Pizza;

use Headfirst\Ingredients\PizzaIngredientFactory;

abstract class ModernPizza
{
    /** @var PizzaIngredientFactory $ingredientFactory */
    protected $ingredientFactory;

    /** @var string $name */
    protected $name;

    /** @var \Headfirst\Ingredients\Dough $dough */
    protected $dough;

    /** @var \Headfirst\Ingredients\Sauce $sauce */
    protected $sauce;

    /** @var array $veggies */
    protected $veggies = [];

    /** @var \Headfirst\Ingredients\Cheese $cheese */
    protected $cheese;

    /** @var \Headfirst\Ingredients\Pepperoni $pepperoni */
    protected $pepperoni;

    /** @var \Headfirst\Ingredients\Clams $clams */
    protected $clams;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }


    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    abstract public function prepare();

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

    public function toString(): string
    {
        return 'Pizza';
    }
}
