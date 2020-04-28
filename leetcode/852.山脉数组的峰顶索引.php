<?php

/*
 * @lc app=leetcode.cn id=852 lang=php
 *
 * [852] 山脉数组的峰顶索引
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $A
     * @return Integer
     */
    public static function peakIndexInMountainArray($A)
    {
        $left = 0;
        $right = sizeof($A) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($A[$mid] > $A[$mid - 1]) {
                if ($A[$mid] > $A[$mid + 1]) {
                    return $mid;
                }
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
    }
}
// @lc code=end
