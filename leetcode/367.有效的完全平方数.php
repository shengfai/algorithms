<?php

/*
 * @lc app=leetcode.cn id=367 lang=php
 *
 * [367] 有效的完全平方数
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $num
     * @return Boolean
     */
    public static function isPerfectSquare($num)
    {
        if ($num < 2) {
            return true;
        }

        $left = 2;
        $right = $num;

        while ($left <= $right) {
            $mid = floor($left + (($right - $left) >> 1));
            $square = $mid * $mid;

            if ($square > $num) {
                $right = $mid - 1;
            } elseif ($square < $num) {
                $left = $mid + 1;
            } else {
                return true;
            }
        }

        return false;
    }
}
// @lc code=end
