<?php

declare(strict_types=1);

namespace Iron\Traits;

use Carbon\CarbonImmutable;

trait CarbonWrapping
{
    public function __call(string $name, array $arguments)
    {
        $carbon = CarbonImmutable::instance(clone $this->dateTime);
        $result = $carbon->$name(...$arguments);

        return $this->transformReturnValueFromCarbon($result);
    }

    public function __get(string $name)
    {
        $carbon = CarbonImmutable::instance(clone $this->dateTime);
        $result = $carbon->$name;

        return $this->transformReturnValueFromCarbon($result);
    }

    private function transformReturnValueFromCarbon($value)
    {
        if (is_object($value) && $value instanceof CarbonImmutable) {
            $dateTime = \DateTimeImmutable::createFromMutable(
                $value->toMutable()
            );

            return self::from($dateTime);
        }

        return $value;
    }
}
