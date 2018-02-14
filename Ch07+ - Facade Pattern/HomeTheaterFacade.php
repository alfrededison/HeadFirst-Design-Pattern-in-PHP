<?php
/**
 * User: isaac
 * Date: 14/02/2018
 * Time: 3:49 PM
 */

namespace Headfirst;


class HomeTheaterFacade
{
    /** @var Amplifier $amp */
    protected $amp;

    /** @var Tuner $tuner */
    protected $tuner;

    /** @var DvdPlayer $dvd */
    protected $dvd;

    /** @var CdPlayer $cd */
    protected $cd;

    /** @var Projector $projector */
    protected $projector;

    /** @var TheaterLights $light */
    protected $light;

    /** @var Screen $screen */
    protected $screen;

    /** @var PopcornPopper $popper */
    protected $popper;

    /**
     * HomeTheaterFacade constructor.
     * @param Amplifier     $amp
     * @param Tuner         $tuner
     * @param DvdPlayer     $dvd
     * @param CdPlayer      $cd
     * @param Projector     $projector
     * @param TheaterLights $light
     * @param Screen        $screen
     * @param PopcornPopper $popper
     */
    public function __construct(Amplifier $amp, Tuner $tuner, DvdPlayer $dvd, CdPlayer $cd, Projector $projector, TheaterLights $light, Screen $screen, PopcornPopper $popper)
    {
        $this->amp       = $amp;
        $this->tuner     = $tuner;
        $this->dvd       = $dvd;
        $this->cd        = $cd;
        $this->projector = $projector;
        $this->light     = $light;
        $this->screen    = $screen;
        $this->popper    = $popper;
    }

    public function watchMovie(string $movie)
    {
        echo 'Get ready to watch a movie...', PHP_EOL;

        $this->popper->on();
        $this->popper->pop();

        $this->light->dim();

        $this->screen->down();

        $this->projector->on();
        $this->projector->wideScreenMode();

        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);

        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie()
    {
        echo 'Shutting movie theater down...', PHP_EOL;

        $this->popper->off();

        $this->light->on();

        $this->screen->up();

        $this->projector->off();

        $this->amp->off();

        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

}
