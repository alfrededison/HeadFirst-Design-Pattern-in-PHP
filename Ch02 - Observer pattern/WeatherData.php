<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 10:38 AM
 */

require_once 'Subject.php';

class WeatherData implements Subject
{
    protected $observers = [];

    protected $temperature;
    protected $humidity;
    protected $pressure;

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if (false !== $index) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        array_walk($this->observers, function ($observer) {
            /** @var \Observer $observer */
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        });
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->measurementsChanged();
    }
}