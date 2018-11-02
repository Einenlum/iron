<?php

declare(strict_types=1);

namespace Iron\Tests;

use PHPUnit\Framework\TestCase;
use Iron\Iron;

final class CarbonTest extends TestCase
{
    public function testCallCarbon()
    {
        $dateTime = \DateTime::createFromFormat('d/m/Y', '01/10/2014');
        $iron = Iron::from($dateTime);
        $inTwoDays = $iron->addDays(2);
        $result = $inTwoDays->toDateTime();

        $this->assertTrue($result instanceof \DateTimeImmutable);
        $this->assertEquals($result->format('d/m/Y'), '03/10/2014');
    }

    public function testGetCarbon()
    {
        $dateTime = \DateTime::createFromFormat('d/m/Y', '08/10/2014');
        $iron = Iron::from($dateTime);
        $day = $iron->day;

        $this->assertEquals($day, 8);
    }
}
