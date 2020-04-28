<?php

/*
 * @lc app=leetcode.cn id=278 lang=php
 *
 * [278] 第一个错误的版本
 */

// @lc code=start
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function firstBadVersion($n)
    {
        $left = 1;
        $right = $n;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($this->isBadVersion($mid)) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        
        return $left;
    }
}
// @lc code=end
