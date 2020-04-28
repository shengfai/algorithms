<?php

/*
 * @lc app=leetcode.cn id=290 lang=php
 *
 * [290] 单词规律
 */

// @lc code=start
class Solution
{

    /**
     * @param String $pattern
     * @param String $str
     * @return Boolean
     */
    public static function wordPattern($pattern, $str)
    {
        $words = explode(' ', $str);

        if (strlen($pattern) != sizeof($words)) {
            return false;
        }

        $patterns = [];
        for ($i = 0; $i < sizeof($words); $i++) {
            if (isset($patterns[$words[$i]])) {
                if ($patterns[$words[$i]] != $pattern[$i]) {
                    return false;
                }
            } else {
                if (in_array($pattern[$i], $patterns)) {
                    return false;
                }
                $patterns[$words[$i]] = $pattern[$i];
            }
        }

        return true;
    }
}
// @lc code=end
