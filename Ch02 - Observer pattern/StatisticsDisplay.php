<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:17 AM
 */

require_once 'Observer.php';
require_once 'DisplayElement.php';
require_once 'Subject.php';

class StatisticsDisplay implements Observer, DisplayElement
{
    /** @var \Subject */
    private $weatherData;

    /** @var float $maxTemp */
    private $maxTemp = 0.0;
    /** @var float $minTemp */
    private $minTemp = 200.0;
    /** @var float $tempSum */
    private $tempSum = 0.0;
    /** @var int $numReadings */
    private $numReadings = 0;

    /**
     * CurrentConditionDisplay constructor.
     * @param \Subject $weatherData
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
        $this->tempSum += $temperature;
        $this->numReadings++;

        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }

        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }

        $this->display();
    }

    public function display()
    {
        echo "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) . "/" . $this->maxTemp . "/" . $this->minTemp . "\n";
    }
}