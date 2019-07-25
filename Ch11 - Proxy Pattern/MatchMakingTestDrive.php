<?php

use Headfirst\NonOwnerPersonProxy;
use Headfirst\OwnerPersonProxy;
use Headfirst\PersonBean;
use Headfirst\PersonBeanImpl;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

function getOwnerProxy(PersonBean $person): PersonBean
{
    return new OwnerPersonProxy($person);
}

function getNonOwnerProxy(PersonBean $person): PersonBean
{
    return new NonOwnerPersonProxy($person);
}

$person = new PersonBeanImpl("Joe Javabean", "Male", "Coding, Workout");
$person->setHotOrNotRating(7);

$ownerProxy = getOwnerProxy($person);
echo "Name is " . $ownerProxy->getName() . "\n";
$ownerProxy->setInterests("bowling, Go");
echo "Interests set from owner proxy\n";
try {
    $ownerProxy->setHotOrNotRating(10);
} catch (Exception $exception) {
    echo "Can't set rating from owner proxy\n";
}
echo "Rating is " . $ownerProxy->getHotOrNotRating() . "\n";

$nonOwnerProxy = getNonOwnerProxy($person);
echo "Name is " . $nonOwnerProxy->getName() . "\n";
try {
    $nonOwnerProxy->setInterests("bowling, Go");
} catch (Exception $exception) {
    echo "Can't set interests from non-owner proxy\n";
}
$nonOwnerProxy->setHotOrNotRating(3);
echo "Rating set from non-owner proxy\n";
echo "Rating is " . $nonOwnerProxy->getHotOrNotRating();
