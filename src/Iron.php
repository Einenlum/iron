<?php

namespace Iron;

use Iron\Iron\Traits\Accessors;

class Iron
{
    use Accessors;

    private $dateTime;

    private function __construct()
    {
    }

    public static function from(\DateTimeInterface $dateTime): self
    {
        $self = new static();
        $self->dateTime = $self->cloneToImmutable($dateTime);

        return $self;
    }
}
