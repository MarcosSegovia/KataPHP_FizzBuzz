<?php

namespace MarcosSegovia;

final class FizzBuzz
{
    const DIVISIBLE_BY_THREE_VALUE = 'Fizz';
    const DIVISIBLE_BY_FIVE_VALUE = 'Buzz';
    const DIVISIBLE_BY_THREE_AND_FIVE_VALUE = 'FizzBuzz';

    public function __invoke($anInputNumber)
    {
        if($this->isDivisibleByThreeAndFive($anInputNumber))
        {
            return self::DIVISIBLE_BY_THREE_AND_FIVE_VALUE;
        }

        if ($this->isDivisibleByFive($anInputNumber))
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
    private function isDivisibleByFive($anInputNumber)
    {
        return $anInputNumber % 5 === 0;
    }

    /**
     *
     *
     * @param $anInputNumber
     *
     * @return bool
     */
    private function isDivisibleByThreeAndFive($anInputNumber)
    {
        return $anInputNumber % 5 === 0 && $anInputNumber % 3 === 0;
    }
}
