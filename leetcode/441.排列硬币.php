<?php

/*
 * @lc app=leetcode.cn id=441 lang=php
 *
 * [441] 排列硬币
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    public function arrangeCoins($n)
    {
        return floor(sqrt($n * 2 + 1/4) - 1/2);
    }
}
// @lc code=end
