<?php

declare(strict_types=1);

namespace Iron\Traits;

trait FinalTransformers
{
    public function toDateTime(): \DateTimeImmutable
    {
        return $this->toDateTimeImmutable();
    }

    public function toDateTimeImmutable(): \DateTimeImmutable
    {
        return clone $this->dateTime;
    }

    public function toDateTimeMutable(): \DateTime
    {
        return new \DateTime($this->dateTime->format(\DateTime::ATOM));
    }

    private function cloneToImmutable(\DateTimeInterface $dateTime): \DateTimeImmutable
    {
        if ($dateTime instanceof \DateTimeImmutable) {
            return clone $dateTime;
        }

        return \DateTimeImmutable::createFromMutable($dateTime);
    }
}
