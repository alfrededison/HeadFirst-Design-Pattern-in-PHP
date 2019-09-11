<?php

namespace Headfirst;

class QuackCounter implements Quackable
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
}