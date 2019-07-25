<?php


namespace Headfirst;


use Exception;

class NonOwnerPersonProxy implements PersonBean
{
    /** @var PersonBean */
    protected $person;

    /**
     * OwnerInvocationHandler constructor.
     * @param PersonBean $person
     */
    public function __construct(PersonBean $person)
    {
        $this->person = $person;
    }

    public function getName(): string
    {
        return $this->person->getName();
    }

    public function getGender(): string
    {
        return $this->person->getGender();
    }

    public function getInterests(): string
    {
        return $this->person->getInterests();
    }

    public function getHotOrNotRating(): int
    {
        return $this->person->getHotOrNotRating();
    }

    /**
     * @param string $name
     * @throws Exception
     */
    public function setName(string $name)
    {
        throw new Exception("Illegal Access");
    }

    /**
     * @param string $gender
     * @throws Exception
     */
    public function setGender(string $gender)
    {
        throw new Exception("Illegal Access");
    }

    /**
     * @param string $interests
     * @throws Exception
     */
    public function setInterests(string $interests)
    {
        throw new Exception("Illegal Access");
    }

    public function setHotOrNotRating(int $rating)
    {
        $this->person->setHotOrNotRating($rating);
    }
}