<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 1:51 PM
 */

namespace Headfirst\Pizza;


class ChicagoStyleVeggiePizza extends Pizza
{
    protected $name = 'Chicago Style Deep Dish Cheese Pizza';
    protected $dough = 'Extra Thick Crust Dough';
    protected $sauce = 'Plum Tomato Sauce';

    protected $toppings = [
        'Shredded Mozzarella Cheese',
    ];

    public function cut()
    {
        echo 'Cutting the pizza into square slices', PHP_EOL;
    }


}