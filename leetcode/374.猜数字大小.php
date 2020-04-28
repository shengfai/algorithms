<?php

/*
 * @lc app=leetcode.cn id=374 lang=php
 *
 * [374] 猜数字大小
 */

// @lc code=start
/**
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is lower than the guess number
 *			      1 if num is higher than the guess number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame
{
    /**
     * @param  Integer  $n
     * @return Integer
     */
    public function guessNumber($n)
    {
        $left = 1;
        $right = $n;

        while ($left <= $right) {
            $mid = $left + (($right - $left) >> 1);

            $result = $this->guess($mid);

            if ($result == -1) {
                $right = $mid - 1;
            } elseif ($result == 1) {
                $left = $mid + 1;
            } elseif ($result == 0) {
                return $mid;
            }
        }
    }
}
// @lc code=end
