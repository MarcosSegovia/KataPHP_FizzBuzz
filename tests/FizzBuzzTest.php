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

    /** @test
     * @dataProvider fizzCasesProvider
     */
    public function itShouldReturnFizzIfDivisibleByThree($inputNumber)
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_THREE_VALUE, $this->myFizzBuzzClass->__invoke($inputNumber));
    }

    public function fizzCasesProvider()
    {
        return [
            [3],
            [27],
            [81]
        ];
    }

    /** @test
     * @dataProvider buzzCasesProvider
     */
    public function itShouldReturnBuzzIfDivisibleByFive($inputNumber)
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_FIVE_VALUE, $this->myFizzBuzzClass->__invoke($inputNumber));
    }

    public function buzzCasesProvider()
    {
        return [
            [20],
            [50],
            [100]
        ];
    }

    /** @test
     * @dataProvider fizzBuzzCasesProvider
     */
    public function itShouldReturnFizzBuzzIfIsDivisibleByThreeAndFive($inputNumber)
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals(self::DIVISIBLE_BY_THREE_AND_FIVE_VALUE, $this->myFizzBuzzClass->__invoke($inputNumber));
    }

    public function fizzBuzzCasesProvider()
    {
        return [
            [15],
            [30],
            [450]
        ];
    }

    /** @test
     * @dataProvider noFizzBuzzCasesProvider
     */
    public function itShouldReturnSameInputNumberAsItIsNotDivisibleByThreeOrFiveOrBoth($inputNumber)
    {
        $this->havingMyFizzBuzzClass();
        $this->assertEquals($inputNumber, $this->myFizzBuzzClass->__invoke($inputNumber));
    }

    public function noFizzBuzzCasesProvider()
    {
        return [
            [17],
            [22],
            [533]
        ];
    }

    private function havingMyFizzBuzzClass()
    {
        $this->myFizzBuzzClass = new FizzBuzz();
    }
}
