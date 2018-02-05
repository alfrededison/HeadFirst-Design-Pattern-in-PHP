<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:17 AM
 */

namespace Headfirst;

class ForecastDisplay implements Observer, DisplayElement
{
    /** @var Subject */
    private $weatherData;

    /** @var float $currentPressure */
    private $currentPressure = 29.92;

    /** @var float $lastPressure */
    private $lastPressure;

    /**
     * CurrentConditionDisplay constructor.
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }


    /**
     * {@inheritdoc}
     */
    public function update($temperature, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo("Forecast: ");
		if ($this->currentPressure > $this->lastPressure) {
            echo("Improving weather on the way!\n");
        } else if ($this->currentPressure == $this->lastPressure) {
            echo("More of the same\n");
        } else if ($this->currentPressure < $this->lastPressure) {
            echo("Watch out for cooler, rainy weather\n");
        }
    }
}