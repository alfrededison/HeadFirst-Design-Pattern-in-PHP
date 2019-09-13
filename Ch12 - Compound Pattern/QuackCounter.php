<?php

namespace Headfirst;

class QuackCounter extends AbstractQuackable
{
    /** @var Quackable */
    protected $duck;

    /** @var int */
    protected static $numberOfQuack;

    /**
     * QuackCounter constructor.
     * @param Quackable $duck
     */
    public function __construct(Quackable $duck)
    {
        parent::__construct();
        $this->duck = $duck;
    }

    public function quack()
    {
        $this->duck->quack();
        static::$numberOfQuack++;
    }

    public static function getQuacks()
    {
        return static::$numberOfQuack;
    }

    function registerObserver(QuackObserver $observer)
    {
        $this->duck->registerObserver($observer);
    }

    function __toString()
    {
        return $this->duck->__toString();
    }
}