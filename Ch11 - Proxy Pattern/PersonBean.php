<?php

namespace Headfirst;

interface PersonBean
{
    public function getName(): string ;
    public function getGender(): string ;
    public function getInterests(): string ;
    public function getHotOrNotRating(): int ;

    public function setName(string $name);
    public function setGender(string $gender);
    public function setInterests(string $interests);
    public function setHotOrNotRating(int $rating);
}