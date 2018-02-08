<?php
/**
 * User: isaac
 * Date: 08/02/2018
 * Time: 10:50 AM
 */

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

use Headfirst\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();
$boiler->fill();
$boiler->boil();
$boiler->drain();
