<?php

namespace App\Chapter2\Section1\Example3;

class ObscuringReferences
{
    private $data;

    /**
     * ObscuringReferences constructor.
     * @param $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    public function diameters()
    {
        $result = [];
        // 0 is rim 1 tire
        foreach ($this->getData() as $data) {
            foreach ($data as $value) {
                $result[] = $value[0] + ($value[1] * 2);
            }
        }

        return $result;
    }
}

$data = [[622, 20], [622, 23], [559, 40]];

$obscuringObject = new ObscuringReferences($data);