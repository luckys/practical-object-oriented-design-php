<?php

namespace App\Chapter2\Section1\Example2;

class Gear2
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
     * ALWAYS WRAP INSTANCE VARIABLES IN ACCESSOR METHOD INSTEAD OF DIRECTLY
     * REFERRING TO VARIABLE
     */

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
        return $this->ratio() * $this->diameter();
    }

    /**
     * @return float|int|mixed
     */
    private function diameter()
    {
        return ($this->getRim() + ($this->getTire() * 2));
    }
}

$gear = new Gear2(52, 11, 26, 1.5);
$newRatio = new Gear2(52, 11); // ArgumentError A Wheel class is needed