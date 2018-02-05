<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:17 AM
 */

namespace Headfirst;

class HeatIndexDisplay implements Observer, DisplayElement
{
    /** @var Subject */
    private $weatherData;

    /** @var float $heatIndex */
    private $heatIndex;

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
        $this->heatIndex = $this->computeHeatIndex($temperature, $humidity);

        $this->display();
    }

    private function computeHeatIndex($temperature, $humidity)
    {
        $index = (float)((16.923 + (0.185212 * $temperature) + (5.37941 * $humidity) - (0.100254 * $temperature * $humidity)
                + (0.00941695 * ($temperature * $temperature)) + (0.00728898 * ($humidity * $humidity))
                + (0.000345372 * ($temperature * $temperature * $humidity)) - (0.000814971 * ($temperature * $humidity * $humidity)) +
                (0.0000102102 * ($temperature * $temperature * $humidity * $humidity)) - (0.000038646 * ($temperature * $temperature * $temperature)) + (0.0000291583 *
                    ($humidity * $humidity * $humidity)) + (0.00000142721 * ($temperature * $temperature * $temperature * $humidity)) +
                (0.000000197483 * ($temperature * $humidity * $humidity * $humidity)) - (0.0000000218429 * ($temperature * $temperature * $temperature * $humidity * $humidity)) +
                0.000000000843296 * ($temperature * $temperature * $humidity * $humidity * $humidity)) -
            (0.0000000000481975 * ($temperature * $temperature * $temperature * $humidity * $humidity * $humidity)));

        return $index;
    }

    public function display()
    {
        echo "Heat index is: ". round($this->heatIndex, 5) . "\n";
    }
}