<?php
/**
 * User: isaac
 * Date: 16/02/2018
 * Time: 4:54 PM
 */

use Headfirst\Coffee;
use Headfirst\Tea;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

echo 'Preparing tea...', PHP_EOL;
$tea = new Tea();
$tea->prepareRecipe();

echo PHP_EOL, 'Preparing coffee...', PHP_EOL;
$coffee = new Coffee();
$coffee->prepareRecipe();
