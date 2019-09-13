<?php

namespace Headfirst;

class GooseAdapter extends AbstractQuackable
{
    /** @var Goose */
    protected $goose;

    /**
     * GooseAdapter constructor.
     * @param Goose $goose
     */
    public function __construct(Goose $goose)
    {
        parent::__construct();
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->honk();
        $this->notifyObservers();
    }

    function __toString()
    {
        return "Goose pretending to be a Duck";
    }
}