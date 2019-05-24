<?php

namespace App\Chapter2\Section1;

class Gear1
{
    private $chainring;
    private $cog;
    private $rim;
    private $tire;

    /**
     * Gear1 constructor.
     * @param $chainring
     * @param $cog
     * @param $rim
     * @param $tire
     */
    public function __construct($chainring, $cog, $rim, $tire)
    {
        $this->chainring = $chainring;
        $this->cog = $cog;
        $this->rim = $rim;
        $this->tire = $tire;
    }


    /**
     * @return mixed
     */
    public function getChainring()
    {
        return $this->chainring;
    }

    /**
     * @return mixed
     */
    public function getCog()
    {
        return $this->cog;
    }

    /**
     * @return mixed
     */
    public function getRim()
    {
        return $this->rim;
    }

    /**
     * @return mixed
     */
    public function getTire()
    {
        return $this->tire;
    }

    public function ratio()
    {
        return $this->getChainring() / $this->getCog();
    }

    public function gearInches()
    {
        return $this->ratio() * ($this->getRim() + ($this->getTire() * 2));
    }
}