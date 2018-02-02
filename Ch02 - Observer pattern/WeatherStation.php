<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:25 AM
 */

require_once 'WeatherData.php';
require_once 'CurrentConditionDisplay.php';
require_once 'StatisticsDisplay.php';
require_once 'ForecastDisplay.php';

$weatherData       = new WeatherData();
$currentDisplay    = new CurrentConditionDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay   = new ForecastDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);