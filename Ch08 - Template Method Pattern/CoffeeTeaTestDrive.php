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

$tea = new Tea();
$tea->prepareRecipe();

$coffee = new Coffee();
$coffee->prepareRecipe();
