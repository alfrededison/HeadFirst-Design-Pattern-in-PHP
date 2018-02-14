<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 4:37 PM
 */

use Headfirst\Amplifier;
use Headfirst\CdPlayer;
use Headfirst\DvdPlayer;
use Headfirst\HomeTheaterFacade;
use Headfirst\PopcornPopper;
use Headfirst\Projector;
use Headfirst\Screen;
use Headfirst\TheaterLights;
use Headfirst\Tuner;

define('HEADFIRST', __DIR__);
require_once __DIR__ . '/../main.php';

$amp       = new Amplifier     ();
$tuner     = new Tuner         ();
$dvd       = new DvdPlayer     ();
$cd        = new CdPlayer      ();
$projector = new Projector     ();
$light     = new TheaterLights ();
$screen    = new Screen        ();
$popper    = new PopcornPopper ();

$homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $light, $screen, $popper);

$homeTheater->watchMovie('Raiders of the Lord Ark');
$homeTheater->endMovie();