<?php


namespace Headfirst;


use Exception;

class OwnerPersonProxy implements PersonBean
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

    public function setName(string $name)
    {
        $this->person->setName($name);
    }

    public function setGender(string $gender)
    {
        $this->person->setGender($gender);
    }

    public function setInterests(string $interests)
    {
        $this->person->setInterests($interests);
    }

    /**
     * @param int $rating
     * @throws Exception
     */
    public function setHotOrNotRating(int $rating)
    {
        throw new Exception("Illegal Access");
    }
}