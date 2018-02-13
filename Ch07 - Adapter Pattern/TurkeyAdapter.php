<?php
/**
 * User: isaac
 * Date: 13/02/2018
 * Time: 3:49 PM
 */

namespace Headfirst;


class TurkeyAdapter implements DuckInterface
{
    /** @var TurkeyInterface $turkey */
    protected $turkey;

    /**
     * TurkeyAdapter constructor.
     * @param TurkeyInterface $turkey
     */
    public function __construct(TurkeyInterface $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
