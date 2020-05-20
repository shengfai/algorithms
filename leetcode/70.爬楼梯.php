<?php

/*
 * @lc app=leetcode.cn id=70 lang=php
 *
 * [70] 爬楼梯
 *
 * https://leetcode-cn.com/problems/climbing-stairs/description/
 *
 * algorithms
 * Easy (48.32%)
 * Likes:    942
 * Dislikes: 0
 * Total Accepted:    173.2K
 * Total Submissions: 358.5K
 * Testcase Example:  '2'
 *
 * 假设你正在爬楼梯。需要 n 阶你才能到达楼顶。
 * 
 * 每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？
 * 
 * 注意：给定 n 是一个正整数。
 * 
 * 示例 1：
 * 
 * 输入： 2
 * 输出： 2
 * 解释： 有两种方法可以爬到楼顶。
 * 1.  1 阶 + 1 阶
 * 2.  2 阶
 * 
 * 示例 2：
 * 
 * 输入： 3
 * 输出： 3
 * 解释： 有三种方法可以爬到楼顶。
 * 1.  1 阶 + 1 阶 + 1 阶
 * 2.  1 阶 + 2 阶
 * 3.  2 阶 + 1 阶
 * 
 * 
 */

// @lc code=start
class Solution
{

    /**
     * @var array
     */
    private $climbedStairs = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }

        $f1 = 1;
        $f2 = 2;
        for ($i = 3; $i <= $n; $i++) {
            $f3 = $f1 + $f2;
            $f1 = $f2;
            $f2 = $f3;
        }
        return $f2;
    }
}
// @lc code=end
