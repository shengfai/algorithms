<?php

/*
 * @lc app=leetcode.cn id=24 lang=php
 *
 * [24] 两两交换链表中的节点
 *
 * https://leetcode-cn.com/problems/swap-nodes-in-pairs/description/
 *
 * algorithms
 * Medium (65.22%)
 * Likes:    478
 * Dislikes: 0
 * Total Accepted:    97K
 * Total Submissions: 148.5K
 * Testcase Example:  '[1,2,3,4]'
 *
 * 给定一个链表，两两交换其中相邻的节点，并返回交换后的链表。
 *
 * 你不能只是单纯的改变节点内部的值，而是需要实际的进行节点交换。
 *
 *
 *
 * 示例:
 *
 * 给定 1->2->3->4, 你应该返回 2->1->4->3.
 *
 *
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function swapPairs($head)
    {
        /**
         * 遍历
         * O(n)
         */

        $pre = new ListNode(0);
        $pre->next = $head;
        $temp = $pre;

        while ($temp->next && $temp->next->next) {
            $a = $temp->next;
            $b = $a->next;

            $temp->next = $b;
            $a->next = $b->next;
            $b->next = $a;

            $temp = $a;
        }

        return $pre->next;
    }
}
// @lc code=end
