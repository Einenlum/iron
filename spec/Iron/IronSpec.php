<?php

namespace spec\Iron;

use Iron\Iron;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IronSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Iron::class);
    }

    function it_can_be_constructed_with_a_date_time()
    {
        $dateTime = new \DateTime();
        $this->beConstructedThrough('from', [$dateTime]);
    }

    function it_can_be_constructed_with_a_date_time_immutable()
    {
        $dateTime = new \DateTimeImmutable();
        $this->beConstructedThrough('from', [$dateTime]);
    }

    function it_returns_an_date_time_immutable_by_default()
    {
        $dateTime = new \DateTime();
        $this->beConstructedThrough('from', [$dateTime]);

        $this->toDateTime()->shouldReturnAnInstanceOf(\DateTimeImmutable::class);
    }

    function it_can_return_an_date_time_immutable()
    {
        $dateTime = new \DateTime();
        $this->beConstructedThrough('from', [$dateTime]);

        $this->toDateTimeImmutable()->shouldReturnAnInstanceOf(\DateTimeImmutable::class);
    }

    function it_can_return_a_date_time_mutable()
    {
        $dateTime = new \DateTimeImmutable();
        $this->beConstructedThrough('from', [$dateTime]);

        $this->toDateTimeMutable()->shouldReturnAnInstanceOf(\DateTime::class);
    }
}
