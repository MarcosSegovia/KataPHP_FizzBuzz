<?php

namespace MarcosSegovia;

final class FizzBuzz
{
    const DIVISIBLE_BY_THREE_VALUE = 'Fizz';

    public function __invoke($anInputNumber)
    {
        return self::DIVISIBLE_BY_THREE_VALUE;
    }
}
