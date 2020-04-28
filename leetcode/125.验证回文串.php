
<?php
/*
 * @lc app=leetcode.cn id=125 lang=php
 *
 * [125] 验证回文串
 *
 * https://leetcode-cn.com/problems/valid-palindrome/description/
 *
 * algorithms
 * Easy (43.29%)
 * Likes:    178
 * Dislikes: 0
 * Total Accepted:    96.3K
 * Total Submissions: 222.4K
 * Testcase Example:  '"A man, a plan, a canal: Panama"'
 *
 * 给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。
 *
 * 说明：本题中，我们将空字符串定义为有效的回文串。
 *
 * 示例 1:
 *
 * 输入: "A man, a plan, a canal: Panama"
 * 输出: true
 *
 *
 * 示例 2:
 *
 * 输入: "race a car"
 * 输出: false
 *
 *
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    public function isPalindrome(string $s)
    {
        $upperString = strtoupper($s);

        $filteredString = $this->_filterNonNumberAndChar($upperString);

        $reversedString = $this->_reverseString($filteredString);

        return $reversedString == $filteredString;
    }
    /**
     * 过滤字符串
     *
     * @param string $s
     * @return string
     */
    private function _filterNonNumberAndChar(string $s)
    {
        return preg_replace('/[^a-z0-9]/i', '', $s);
    }

    /**
     * 反转字符串
     *
     * @param string $s
     * @return string
     */
    private function _reverseString(string $s)
    {
        return strrev($s);
    }
}
// @lc code=end
