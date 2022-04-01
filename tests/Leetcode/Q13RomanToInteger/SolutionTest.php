<?php

namespace Leetcode\Q13RomanToInteger;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testRomanToInt()
    {
        $solution = new Solution();
        $this->assertEquals(3, $solution->romanToInt('III'));
        $this->assertEquals(58, $solution->romanToInt('LVIII'));
        $this->assertEquals(1994, $solution->romanToInt('MCMXCIV'));
    }
}
