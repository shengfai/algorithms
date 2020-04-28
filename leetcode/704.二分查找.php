<?php

/*
 * @lc app=leetcode.cn id=704 lang=php
 *
 * [704] 二分查找
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function search($nums, $target)
    {
        $left = 0;
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($nums[$mid] > $target) {
                $right = $mid -1;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }

        return -1;
    }
}
// @lc code=end
