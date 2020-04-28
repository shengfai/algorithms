<?php

/*
 * @lc app=leetcode.cn id=1248 lang=php
 *
 * [1248] 统计「优美子数组」
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    public function numberOfSubarrays($nums, $k, $index = 0)
    {
        $size = sizeof($nums);

        if ($size - $index < $k) {
            return $index;
        }
        
        // loop
        $j = 0;
        for ($i = $index; $i < $size; $i++) {
            if ($nums[$i] % 2 != 0) {
                $j++;
            }

            if ($j == $k) {
                $this->numberOfSubarrays($nums, $k, ++$index);
            }
        }

        if ($j < $k) {
            return $index;
        }
    }
}
// @lc code=end
