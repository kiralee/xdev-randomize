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
}