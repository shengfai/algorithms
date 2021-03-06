<?php

/*
 * @lc app=leetcode.cn id=20 lang=php
 *
 * [20] 有效的括号
 *
 * https://leetcode-cn.com/problems/valid-parentheses/description/
 *
 * algorithms
 * Easy (41.40%)
 * Likes:    1542
 * Dislikes: 0
 * Total Accepted:    263.7K
 * Total Submissions: 636.3K
 * Testcase Example:  ''()''
 *
 * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。
 *
 * 有效字符串需满足：
 *
 *
 * 左括号必须用相同类型的右括号闭合。
 * 左括号必须以正确的顺序闭合。
 *
 *
 * 注意空字符串可被认为是有效字符串。
 *
 * 示例 1:
 *
 * 输入: '()'
 * 输出: true
 *
 *
 * 示例 2:
 *
 * 输入: '()[]{}'
 * 输出: true
 *
 *
 * 示例 3:
 *
 * 输入: '(]'
 * 输出: false
 *
 *
 * 示例 4:
 *
 * 输入: '([)]'
 * 输出: false
 *
 *
 * 示例 5:
 *
 * 输入: '{[]}'
 * 输出: true
 *
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    public static function isValid($s)
    {
        $partners =  [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];

        $stack = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (empty($stack)) {
                array_push($stack, $s[$i]);
                continue;
            }

            if (isset($partners[$s[$i]]) && (end($stack) == $partners[$s[$i]])) {
                array_pop($stack);
                continue;
            }

            array_push($stack, $s[$i]);
        }

        return empty($stack);
    }
}
// @lc code=end
