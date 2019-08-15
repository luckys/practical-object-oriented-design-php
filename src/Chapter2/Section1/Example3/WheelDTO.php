<?php

namespace App\Chapter2\Section1\Example3;

class WheelDTO
{
    private $rim;
    private $tire;

    /**
     * WheelDTO constructor.
     * @param $rim
     * @param $tire
     */
    public function __construct(int $rim, int $tire)
    {
        $this->rim = $rim;
        $this->tire = $tire;
    }

    /**
     * @return mixed
     */
    public function getRim(): int
    {
        return $this->rim;
    }

    /**
     * @return mixed
     */
    public function getTire(): int
    {
        return $this->tire;
    }
}