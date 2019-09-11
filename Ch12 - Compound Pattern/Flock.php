<?php

namespace Headfirst;

class Flock implements Quackable
{
    /** @var array  */
    protected $quackers = [];

    public function add(Quackable $quackable)
    {
        $this->quackers[] = $quackable;
    }

    public function quack()
    {
        foreach ($this->quackers as $quacker) {
            /** @var Quackable $quacker */
            $quacker->quack();
        }
    }
}