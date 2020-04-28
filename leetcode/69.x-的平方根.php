<?php

/*
 * @lc app=leetcode.cn id=69 lang=php
 *
 * [69] x 的平方根
 */

/**
 * 题解：当 x≥2 时，它的整数平方根一定小于 x/2 且大于 0，即 0 < a < x/2。
 * 由于a 一定是整数，此问题可以转换成在有序整数集中寻找一个特定值，因此可以使用二分查找。
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    public function mySqrt($x)
    {
        if ($x < 2) {
            return $x;
        }

        $left = 2;
        $right = $x >> 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($mid * $mid > $x) {
                $right = $mid - 1;
            } elseif ($mid * $mid < $x) {
                if (($mid + 1) * ($mid + 1) > $x) {
                    return $mid;
                }
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }

        return 1;
    }
}
// @lc code=end
