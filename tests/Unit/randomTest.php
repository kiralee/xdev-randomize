<?php
declare(strict_types=1);
namespace Test\Unit;

use Xdev\Support\Randomize\Random;
use PHPUnit\Framework\TestCase;

class randomTest extends TestCase{
    
    public function testRandomNumber()
    {
        $result = Random::randomNumber(10,20);
        $this->assertIsNumeric($result);
    }

    public function testRandomString()
    {
        $result = Random::randomString(20);
        $this->assertIsString($result);
    }

    public function  testRandomElementInArray()
    {
        $testCase = [
            'apple',
            'orange',
            'carrot',
            'something',
            'foo',
            'bazzzz'
        ];
        $result = Random::randomElementInArray($testCase);
        $this->assertIsString($result);
    }
}