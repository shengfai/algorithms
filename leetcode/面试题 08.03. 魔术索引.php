<?php

/*
 * @lc app=leetcode.cn lang=php
 *
 * 面试题 08.03. 魔术索引
 * https://leetcode-cn.com/problems/magic-index-lcci/
 *
 * 魔术索引。
 * 在数组A[0...n-1]中，有所谓的魔术索引，满足条件A[i] = i。
 * 给定一个有序整数数组，编写一种方法找出魔术索引，若有的话，在数组A中找出一个魔术索引，如果没有，则返回-1。
 * 若有多个魔术索引，返回索引值最小的一个。
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findMagicIndex($nums)
    {
        $left = 0;
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);
            if($nums[$mid] <= $mid) {
                if($mid == 0 || $mid)
            }
        }
    }
}
// @lc code=end
