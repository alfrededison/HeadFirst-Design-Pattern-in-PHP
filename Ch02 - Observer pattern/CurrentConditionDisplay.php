<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 11:17 AM
 */

require_once 'Observer.php';
require_once 'DisplayElement.php';
require_once 'Subject.php';

class CurrentConditionDisplay implements Observer, DisplayElement
{
    /** @var \Subject */
    private $weatherData;

    /** @var float $temperature */
    private $temperature;

    /** @var float $humidity */
    private $humidity;

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
        $this->temperature = $temperature;
        $this->humidity    = $humidity;

        $this->display();
    }

    public function display()
    {
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity\n";
    }
}