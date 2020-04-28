<?php

/*
 * @lc app=leetcode.cn id=349 lang=php
 *
 * [349] 两个数组的交集
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    public function intersection($nums1, $nums2)
    {
        $intersections = [];
        
        if (empty($nums1) || empty($nums2)) {
            return $intersections;
        }

        // 去重
        // $nums1 = array_unique($nums1);

        // 排序
        sort($nums1);
        sort($nums2);

        // 遍历，查找
        $left = 0;
        $right = sizeof($nums2) - 1;

        foreach ($nums1 as $num1) {
            if ($this->checkInArray($intersections, $num1)) {
                continue;
            }

            if ($this->checkInArray($nums2, $num1)) {
                array_push($intersections, $num1);
            }
        }

        return $intersections;
    }

    /**
     * 查找指定值是否在数组中
     *
     * @param array $nums
     * @param integer $target
     * @return boolean
     */
    protected function checkInArray(array $nums, int $target):bool
    {
        if (empty($nums)) {
            return false;
        }

        $left = 0;
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            if ($nums[$mid] < $target) {
                $left = $mid + 1;
            } elseif ($nums[$mid] > $target) {
                $right = $mid - 1;
            } else {
                return true;
            }
        }

        return false;
    }
}
// @lc code=end
