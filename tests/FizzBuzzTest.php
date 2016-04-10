<?php

namespace MarcosSegovia\Tests;

use MarcosSegovia\FizzBuzz;

final class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    const DIVISIBLE_BY_THREE_VALUE = 'Fizz';

    /** @test */
    public function itShouldReturnFizzIfDivisibleByThree()
    {
        $fizzBuzzClass = new FizzBuzz();
        $this->assertEquals(self::DIVISIBLE_BY_THREE_VALUE, $fizzBuzzClass(3));
    }

    /** @test */
    public function itShouldReturnBuzzIfDivisibleByFive()
    {
        $fizzBuzzClass = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzzClass(5));
    }
}
