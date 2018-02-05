<?php
/**
 * User: isaac
 * Date: 02/02/2018
 * Time: 10:30 AM
 */

namespace Headfirst;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObservers();
}