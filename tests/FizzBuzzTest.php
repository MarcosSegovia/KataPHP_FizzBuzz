<?php

namespace MarcosSegovia\Tests;

use MarcosSegovia\FizzBuzz;

final class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function itShouldReturnFizzIfDivisibleByThree()
    {
        $fizzBuzzClass = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzzClass(3));
    }
}
