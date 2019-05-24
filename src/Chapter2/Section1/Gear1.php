<?php

namespace App\Chapter2\Section1;

class Gear1
{
    private $chainring;
    private $cog;

    /**
     * Gear constructor.
     * @param $chainring
     * @param $cog
     */
    public function __construct($chainring, $cog)
    {
        $this->chainring = $chainring;
        $this->cog = $cog;
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

    public function ratio()
    {
        return $this->getChainring() / $this->getCog();
    }
}