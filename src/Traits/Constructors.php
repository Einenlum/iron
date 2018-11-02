<?php

declare(strict_types=1);

namespace Iron\Traits;

trait Constructors
{
    private function __construct()
    {
    }

    public static function now(): self
    {
        $self = new static();
        $self->dateTime = new \DateTimeImmutable();

        return $self;
    }

    public static function from(\DateTimeInterface $dateTime): self
    {
        $self = new static();
        $self->dateTime = $self->cloneToImmutable($dateTime);

        return $self;
    }
}
