<?php
/**
 * User: isaac
 * Date: 05/02/2018
 * Time: 9:53 AM
 */

if (!defined('HEADFIRST')) {
    define('HEADFIRST', __DIR__);
}

function my_autoloader(string $class)
{
    $class    = str_replace('Headfirst', HEADFIRST, $class);
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    include($filename);
}

spl_autoload_register('my_autoloader');
