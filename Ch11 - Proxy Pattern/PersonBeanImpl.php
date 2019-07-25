<?php

namespace Headfirst;

class PersonBeanImpl implements PersonBean
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $gender;
    /** @var string */
    protected $interests;
    /** @var int */
    protected $rating = 0;
    /** @var int */
    protected $ratingCount = 0;

    /**
     * PersonBeanImpl constructor.
     * @param string $name
     * @param string $gender
     * @param string $interests
     */
    public function __construct(string $name, string $gender, string $interests)
    {
        $this->name      = $name;
        $this->gender    = $gender;
        $this->interests = $interests;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getInterests(): string
    {
        return $this->interests;
    }

    public function getHotOrNotRating(): int
    {
        return $this->ratingCount == 0 ? 0 : ($this->rating / $this->ratingCount);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function setInterests(string $interests)
    {
        $this->interests = $interests;
    }

    public function setHotOrNotRating(int $rating)
    {
        $this->rating += $rating;
        $this->ratingCount++;
    }
}