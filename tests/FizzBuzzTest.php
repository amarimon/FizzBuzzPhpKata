<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use kata\FizzBuzz;

class FizzBuzzTest extends TestCase {

    public function setUp() : void {
        $this->FizzBuzz = new FizzBuzz();
    }

    public function tearDown() : void {
        unset($this->FizzBuzz);    
    }

    public function testFizzBuzzCanBeInstanciated() {
        $this->assertInstanceOf('kata\FizzBuzz', $this->FizzBuzz);
    }

    public function testShouldReturn1WhenInputIs1() {

        $input = 1;
        $result = $this->FizzBuzz->execute($input);
        $this->assertEquals(1, $result);
    }

    public function testShouldReturn2WhenInputIs2()
    {

        $input = 2;

        $result = $this->FizzBuzz->execute($input);

        $this->assertEquals(2, $result);
    }

    public function testShouldReturnFizzWhenInputIs3()
    {
        $input = 3;

        $result = $this->FizzBuzz->execute($input);

        $this->assertEquals(FizzBuzz::FIZZ, $result);
    }

    public function testShouldReturnBuzzWhenInputIs5()
    {
        $input = 5;

        $result = $this->FizzBuzz->execute($input);

        $this->assertEquals(FizzBuzz::BUZZ,$result);
    }

    public function testShouldReturnFizzWhenInputIs6()
    {
        $input = 6;

        $result = $this->FizzBuzz->execute($input);

        $this->assertEquals(FizzBuzz::FIZZ, $result);
    }

    public function testShouldReturnFizzBuzzWhenInputIs15()
    {
        $input = 15;

        $result = $this->FizzBuzz->execute($input);

        $this->assertEquals(FizzBuzz::FIZZBUZZ, $result);
    }

    public function testShouldReturnRangeWhenInputIsRange()
    {
        $input = [
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
        ];
        $expected = [
            1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz', 16
        ];

        $result = $this->FizzBuzz->executeRange($input);

        $this->assertEquals($expected, $result);
    }
    
    public function testShouldReturnTypeException()
    {
        $this->expectException('TypeError');
        $input = 'test';
        $this->FizzBuzz->execute($input);
   }
 }