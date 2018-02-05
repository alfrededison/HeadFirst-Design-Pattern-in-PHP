<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:25 AM
 */

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

use Headfirst\CurrentConditionDisplay;
use Headfirst\ForecastDisplay;
use Headfirst\HeatIndexDisplay;
use Headfirst\StatisticsDisplay;
use Headfirst\WeatherData;

$weatherData       = new WeatherData();
$currentDisplay    = new CurrentConditionDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay   = new ForecastDisplay($weatherData);
$heatIndexDisplay  = new HeatIndexDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);