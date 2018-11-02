<?php

namespace Iron;

use Iron\Traits\FinalTransformers;

class Iron
{
    use FinalTransformers;

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
