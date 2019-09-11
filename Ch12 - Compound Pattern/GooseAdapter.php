<?php

namespace Headfirst;

class GooseAdapter implements Quackable
{
    /** @var Goose */
    protected $goose;

    /**
     * GooseAdapter constructor.
     * @param Goose $goose
     */
    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->honk();
    }
}