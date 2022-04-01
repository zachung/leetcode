<?php

namespace Leetcode\Q13RomanToInteger;

/**
 * Symbol       Value
 * I             1
 * V             5
 * X             10
 * L             50
 * C             100
 * D             500
 * M             1000
 *
 * Given a roman numeral, convert it to an integer.
 * - I can be placed before V (5) and X (10) to make 4 and 9.
 * - X can be placed before L (50) and C (100) to make 40 and 90.
 * - C can be placed before D (500) and M (1000) to make 400 and 900.
 *
 * - 1 <= s.length <= 15
 * - s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
 * - It is guaranteed that s is a valid roman numeral in the range [1, 3999].
 */
class Solution {
    function romanToInt(string $s): int {
        // 定義字元對應的數值
        $unit = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $n = 0;
        // 前一位元的數值
        $preUnitNumber = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            // 當前位元數值
            $curUnitNumber = $unit[$s[$i]];
            // 前一位元的數值 < 當前位元數值，扣回前次累加(加錯)的數值 & 此次需扣除數值
            if ($preUnitNumber < $curUnitNumber) {
                $n -= $preUnitNumber * 2;
            }
            $n += $curUnitNumber;
            $preUnitNumber = $curUnitNumber;
        }

        return $n;
    }
}
