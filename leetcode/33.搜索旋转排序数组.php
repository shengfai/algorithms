<?php

/*
 * @lc app=leetcode.cn id=33 lang=php
 *
 * [33] 搜索旋转排序数组
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public static function search($nums, $target)
    {
        $left = 0;
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($nums[$mid] == $target) {
                return $mid;
            }
            
            // 旋转点在中位数右侧
            if ($nums[$mid] >= $nums[$left]) {
                // 最左侧元素 <= 查找目标 < 中位数
                if ($nums[$mid] > $target && $nums[$left] <= $target) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            }
            // 旋转点在中位数左侧，或与中位数重合
            else {
                // 中位数 < 查找目标 <= 最右侧元素
                if ($nums[$mid] < $target && $target <= $nums[$right]) {
                    $left = $mid + 1;
                } else {
                    $right = $mid -1;
                }
            }
        }

        return -1;
    }
}
// @lc code=end
