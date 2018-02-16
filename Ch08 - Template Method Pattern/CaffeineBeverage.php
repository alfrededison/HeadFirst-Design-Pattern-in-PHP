<?php
/**
 * User: isaac
 * Date: 16/02/2018
 * Time: 4:44 PM
 */

namespace Headfirst;


abstract class CaffeineBeverage
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    protected function boilWater()
    {
        echo 'Boiling water', PHP_EOL;
    }

    protected function pourInCup()
    {
        echo 'Pouring in cup', PHP_EOL;
    }
}
