<?php

namespace MarcosSegovia;

final class FizzBuzz
{
    const DIVISIBLE_BY_THREE_VALUE = 'Fizz';
    const DIVISIBLE_BY_FIVE_VALUE = 'Buzz';

    public function __invoke($anInputNumber)
    {
        if ($this->isDivisibleBy5($anInputNumber))
        {
            return self::DIVISIBLE_BY_FIVE_VALUE;
        }

        return self::DIVISIBLE_BY_THREE_VALUE;
    }

    /**
     *
     *
     * @param $anInputNumber
     *
     * @return bool
     */
    private function isDivisibleBy5($anInputNumber)
    {
        return $anInputNumber % 5 === 0;
    }
}
