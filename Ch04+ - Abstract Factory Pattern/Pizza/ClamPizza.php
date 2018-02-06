<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:51 PM
 */

namespace Headfirst\Pizza;


class ClamPizza extends ModernPizza
{
    public function prepare()
    {
        echo 'Preparing ', $this->getName(), PHP_EOL;
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clams  = $this->ingredientFactory->createClams();
    }
}