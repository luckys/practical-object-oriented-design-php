<?php
declare(strict_types=1);

namespace Test\Chapter2\Section1;

use App\Chapter2\Section1\Gear1;
use PHPUnit\Framework\TestCase;

class Gear1Test extends TestCase
{
    /**
     * @test
     */
    public function it_calculate_a_ratio_for_a_gear1()
    {
        $gear1 = new Gear1(100, 5);
        $this->assertEquals(20, $gear1->ratio());
    }
}