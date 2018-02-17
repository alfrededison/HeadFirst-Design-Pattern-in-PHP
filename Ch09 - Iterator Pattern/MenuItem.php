<?php
/**
 * User: isaac
 * Date: 17/02/2018
 * Time: 11:39 AM
 */

namespace Headfirst;


class MenuItem
{
    /** @var string $name */
    protected $name;

    /** @var string $description */
    protected $description;

    /** @var bool $vegetarian */
    protected $vegetarian;

    /** @var float $price */
    protected $price;

    /**
     * MenuItem constructor.
     * @param string $name
     * @param string $description
     * @param bool   $vegetarian
     * @param float  $price
     */
    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name        = $name;
        $this->description = $description;
        $this->vegetarian  = $vegetarian;
        $this->price       = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
