<?php

/*
 * @lc app=leetcode.cn id=66 lang=php
 *
 * [66] 加一
 *
 * https://leetcode-cn.com/problems/plus-one/description/
 *
 * algorithms
 * Easy (43.92%)
 * Likes:    467
 * Dislikes: 0
 * Total Accepted:    154.3K
 * Total Submissions: 349.6K
 * Testcase Example:  '[1,2,3]'
 *
 * 给定一个由整数组成的非空数组所表示的非负整数，在该数的基础上加一。
 * 
 * 最高位数字存放在数组的首位， 数组中每个元素只存储单个数字。
 * 
 * 你可以假设除了整数 0 之外，这个整数不会以零开头。
 * 
 * 示例 1:
 * 
 * 输入: [1,2,3]
 * 输出: [1,2,4]
 * 解释: 输入数组表示数字 123。
 * 
 * 
 * 示例 2:
 * 
 * 输入: [4,3,2,1]
 * 输出: [4,3,2,2]
 * 解释: 输入数组表示数字 4321。
 * 
 * 
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        $length =  count($digits);

        for ($i = $length - 1; $i >= 0; $i--) {
            // $digits[$i]++;
            // $digits[$i] = $digits[$i] % 10;
            // if ($digits[$i] != 0) {
            //     return $digits;
            // };
            if ($digits[$i] < 9) {
                $digits[$i]++;
                return $digits;
            }

            $digits[$i] = 0;
        }

        array_push($digits, 0);
        $digits[0] = 1;

        return $digits;
    }
}
// @lc code=end
