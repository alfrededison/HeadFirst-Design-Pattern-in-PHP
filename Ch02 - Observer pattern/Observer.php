<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 10:31 AM
 */

interface Observer
{
    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @return void
     */
    public function update($temperature, $humidity, $pressure);
}