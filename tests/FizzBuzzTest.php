<?php

namespace MarcosSegovia\Tests;

use MarcosSegovia\FizzBuzz;

final class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    const DIVISIBLE_BY_THREE_VALUE          = 'Fizz';
    const DIVISIBLE_BY_FIVE_VALUE           = 'Buzz';
    const DIVISIBLE_BY_THREE_AND_FIVE_VALUE = 'FizzBuzz';

    private $myFizzBuzzClass;

    public function tearDown()
    {
        $myFizzBuzzClass = null;
    }

    /** @test */
    public function itShouldReturnFizzIfDivisibleByThree()
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_THREE_VALUE, $this->myFizzBuzzClass->__invoke(3));
    }

    /** @test */
    public function itShouldReturnBuzzIfDivisibleByFive()
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_FIVE_VALUE, $this->myFizzBuzzClass->__invoke(5));
    }

    /** @test */
    public function itShouldReturnFizzBuzzIfIsDivisibleByThreeAndFive()
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_THREE_AND_FIVE_VALUE, $this->myFizzBuzzClass->__invoke(15));
    }

    /** @test */
    public function itShouldReturnSameInputNumberAsItIsNotDivisibleByThreeOrFiveOrBoth()
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals('17', $this->myFizzBuzzClass->__invoke(17));
    }

    private function havingMyFizzBuzzClass()
    {
        $this->myFizzBuzzClass = new FizzBuzz();
    }
}
