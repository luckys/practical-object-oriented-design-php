<?php

namespace App\Chapter2\Section1\Example3;

class RevealingReferences
{
    private $data;
    private $wheels;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->wheels = $this->wheelify($data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    public function diameters(array $wheels)
    {
        if (!is_array($wheels)) {
            throw new \Exception('The data should be an array');
        }

        if (isset($wheels[0]) && !($wheels[0] instanceof  WheelDTO)) {
            throw new \Exception('The data should be an instance of WheelDTO');
        }

        $result = [];

        foreach ($wheels as $wheel) {
            $result[] = $this->diameter($wheel);
        }
    }

    private function diameter(WheelDTO $wheel)
    {
        return $wheel->getRim() + ($wheel.getTire() * 2);
    }

    private function wheelify(array $data)
    {
        if (!is_array($data)) {
            throw new \Exception('The data should be an array');
        }

        if (!isset($data[0][0]) || !isset($data[0][1])) {
            throw new \Exception('The data is not a multiple array');
        }

        $wheels = [];
        // 0 is rim 1 tire
        foreach ($this->getData() as $data) {
            foreach ($data as $value) {
                $wheels[] = new WheelDTO($value[0], $value[1]);
            }
        }

        return $wheels;
    }
}

$data = [[622, 20], [622, 23], [559, 40]];

$revealingObject = new RevealingReferences($data);