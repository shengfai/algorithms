<?php

/*
 * @lc app=leetcode.cn id=744 lang=php
 *
 * [744] 寻找比目标字母大的最小字母
 */

// @lc code=start
class Solution
{

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    public static function nextGreatestLetter($letters, $target)
    {
        $left = 0;
        $right = sizeof($letters) - 1;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);
            if (ord($letters[$mid]) > ord($target)) {
                if ($mid == 0 || ord($letters[$mid - 1]) <= ord($target)) {
                    return $letters[$mid];
                }
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $letters[0];
    }
}
// @lc code=end
