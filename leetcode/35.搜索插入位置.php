<?php

/*
 * @lc app=leetcode.cn id=35 lang=php
 * [35] 搜索插入位置
 */

// @lc code=start
class Solution
{

    /**
     * 二分查找 O(logn)
     *
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert($nums, $target)
    {
        if (empty($nums)) {
            return 0;
        }
        
        $begin = 0;
        $end = sizeof($nums) - 1;
        
        while ($begin <= $end) {
            $mid = intval($begin + (($end - $begin) >> 1));
            
            if ($nums[$mid] == $target) {
                return $mid;
            }
            
            if ($nums[$mid] < $target) {
                $begin = $mid + 1;
            } elseif ($nums[$mid] > $target) {
                $end = $mid - 1;
            }
        }
        
        return $begin;
    }
}
// @lc code=end
